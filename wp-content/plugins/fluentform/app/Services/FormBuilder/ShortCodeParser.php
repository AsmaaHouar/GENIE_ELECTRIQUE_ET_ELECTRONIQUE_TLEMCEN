<?php

namespace FluentForm\App\Services\FormBuilder;

use FluentForm\App;
use FluentForm\App\Services\Browser\Browser;
use FluentForm\Framework\Helpers\ArrayHelper;
use FluentForm\App\Modules\Form\FormDataParser;
use FluentForm\App\Modules\Form\FormFieldsParser;

class ShortCodeParser
{
    protected static $form = null;

    protected static $entry = null;

    protected static $browser = null;

    protected static $formFields = null;

    protected static $store = [
        'inputs' => null,
        'original_inputs' => null,
        'user' => null,
        'post' => null,
        'other' => null,
        'submission' => null
    ];

    public static function parse($parsable, $entryId, $data = null, $form = null)
    {
        try {
            $entryId = (int)$entryId;

            static::setDependencies($entryId, $data, $form);

            if (is_array($parsable)) {
                return static::parseShortCodeFromArray($parsable);
            }

            return static::parseShortCodeFromString($parsable);

        } catch (\Exception $e) {
            // dd($e->getMessage());
        }
    }

    protected static function setDependencies($entry, $data, $form)
    {
        static::setEntry($entry);
        static::setData($data);
        static::setForm($form);
    }

    protected static function setEntry($entry)
    {
        static::$entry = $entry;
    }

    protected static function setdata($data)
    {
        if (!is_null($data)) {
            static::$store['inputs'] = $data;
            static::$store['original_inputs'] = $data;
        } else {
            $data = json_decode(static::getEntry()->response, true);
            static::$store['inputs'] = $data;
            static::$store['original_inputs'] = $data;
        }
    }

    protected static function setForm($form)
    {
        if (!is_null($form)) {
            static::$form = $form;
        } else {
            static::$form = static::getEntry()->form_id;
        }
    }

    protected static function parseShortCodeFromArray($parsable)
    {
        foreach ($parsable as $key => $value) {
            if (is_array($value)) {
                $parsable[$key] = static::parseShortCodeFromArray($value);
            } else {
                $parsable[$key] = static::parseShortCodeFromString($value);
            }
        }

        return $parsable;
    }

    protected static function parseShortCodeFromString($parsable)
    {
        return preg_replace_callback('/{+(.*?)}/', function ($matches) {
            if (strpos($matches[1], 'inputs.') !== false) {
                $formProperty = substr($matches[1], strlen('inputs.'));
                return static::getFormData($formProperty);
            } elseif (strpos($matches[1], 'user.') !== false) {
                $userProperty = substr($matches[1], strlen('user.'));
                return static::getUserData($userProperty);
            } elseif (strpos($matches[1], 'embed_post.') !== false) {
                $postProperty = substr($matches[1], strlen('embed_post.'));
                return static::getPostData($postProperty);
            } elseif (strpos($matches[1], 'wp.') !== false) {
                $wpProperty = substr($matches[1], strlen('wp.'));
                return static::getWPData($wpProperty);
            } elseif (strpos($matches[1], 'submission.') !== false) {
                $submissionProperty = substr($matches[1], strlen('submission.'));
                return static::getSubmissionData($submissionProperty);
            } elseif (strpos($matches[1], 'cookie.') !== false) {
                $scookieProperty = substr($matches[1], strlen('cookie.'));
                return ArrayHelper::get($_COOKIE, $scookieProperty);
            }  elseif (strpos($matches[1], 'payment.') !== false) {
                $property = substr($matches[1], strlen('payment.'));
                return apply_filters('fluentform_payment_smartcode', '', $property, self::getInstance());
            } else {
                return static::getOtherData($matches[1]);
            }
        }, $parsable);
    }

    protected static function getFormData($key)
    {
        if (strpos($key, '.') && !isset(static::$store['inputs'][$key])) {
            if (!isset(static::$store['inputs'][$key])) {
                static::$store['inputs'][$key] = ArrayHelper::get(
                    static::$store['original_inputs'], $key, ''
                );
            }
        }

        if (!isset(static::$store['inputs'][$key])) {
            static::$store['inputs'][$key] = ArrayHelper::get(
                static::$store['inputs'], $key, ''
            );
        }

        if (is_null(static::$formFields)) {
            static::$formFields = FormFieldsParser::getShortCodeInputs(
                static::getForm(), ['admin_label', 'attributes', 'options', 'raw']
            );
        }

        $field = ArrayHelper::get(static::$formFields, $key, '');

        if (!$field) return '';

        return static::$store['inputs'][$key] = App::applyFilters(
            'fluentform_response_render_' . $field['element'],
            static::$store['inputs'][$key],
            $field,
            static::getForm()->id,
            false
        );
    }

    protected static function getUserData($key)
    {
        if (is_null(static::$store['user'])) {
            static::$store['user'] = wp_get_current_user();
        }
        return static::$store['user']->{$key};
    }

    protected static function getPostData($key)
    {
        if (is_null(static::$store['post'])) {
            $postId = static::$store['inputs']['__fluent_form_embded_post_id'];
            static::$store['post'] = get_post($postId);
            static::$store['post']->permalink = get_the_permalink(static::$store['post']);
        }

        if (strpos($key, 'author.') !== false) {
            $authorProperty = substr($key, strlen('author.'));
            $authorId = static::$store['post']->post_author;
            if ($authorId) {
                return get_the_author_meta($authorProperty, $authorId);
            }
            return '';
        }

        return static::$store['post']->{$key};
    }

    protected static function getWPData($key)
    {
        if ($key == 'admin_email') {
            return get_option('admin_email');
        }
        if ($key == 'site_url') {
            return site_url();
        }
        if ($key == 'site_title') {
            return get_option('blogname');
        }
        return $key;
    }

    protected static function getSubmissionData($key)
    {
        $entry = static::getEntry();
        if (property_exists($entry, $key)) {
            if($key == 'total_paid' || $key == 'payment_total') {
                return round($entry->{$key} / 100, 2);
            }
            return $entry->{$key};
        }
        if($key == 'admin_view_url') {
            return admin_url('admin.php?page=fluent_forms&route=entries&form_id='.$entry->form_id.'#/entries/'.$entry->id);
        }

        return '';
    }

    protected static function getOtherData($key)
    {
        if (strpos($key, 'date.') === 0) {
            return date(str_replace('date.', '', $key));
        } elseif ($key == 'admin_email') {
            return get_option('admin_email', false);
        } elseif ($key == 'ip') {
            return static::getRequest()->getIp();
        } elseif ($key == 'browser.platform') {
            return static::getUserAgent()->getPlatform();
        } elseif ($key == 'browser.name') {
            return static::getUserAgent()->getBrowser();
        } elseif ($key == 'all_data') {
            $formFields = FormFieldsParser::getEntryInputs(static::getForm());
            $inputLabels = FormFieldsParser::getAdminLabels(static::getForm(), $formFields);
            $response = FormDataParser::parseFormSubmission(static::getEntry(), static::getForm(), $formFields, true);

            $html = '<table class="ff_all_data" width="600" cellpadding="0" cellspacing="0"><tbody>';
            foreach ($inputLabels as $key => $label) {
                if (array_key_exists($key, $response->user_inputs) && ArrayHelper::get($response->user_inputs, $key)) {
                    $data = ArrayHelper::get($response->user_inputs, $key);
                    if (is_array($data) || is_object($data)) {
                        continue;
                    }
                    $html .= '<tr class="field-label"><th style="padding: 6px 12px; background-color: #f8f8f8; text-align: left;"><strong>' . $label . '</strong></th></tr><tr class="field-value"><td style="padding: 6px 12px 12px 12px;">' . $data . '</td></tr>';
                }
            }
            $html .= '</tbody></table>';
            return $html;
        }
        // This fallback actually

        $handlerValue = apply_filters('fluentform_shortcode_parser_callback_' . $key, '{'.$key.'}', self::getInstance());


        if ($handlerValue) {
            return $handlerValue;
        }
        return '';
    }

    public static function getForm()
    {
        if (!is_object(static::$form)) {
            static::$form = wpFluent()->table('fluentform_forms')->find(static::$form);
        }

        return static::$form;
    }

    public static function getEntry()
    {
        if (!is_object(static::$entry)) {
            static::$entry = wpFluent()->table('fluentform_submissions')->find(static::$entry);
        }

        return static::$entry;
    }

    protected static function getRequest()
    {
        return App::make('request');
    }

    protected static function getUserAgent()
    {
        if (is_null(static::$browser)) {
            static::$browser = new Browser();
        }
        return static::$browser;
    }

    public static function getInstance()
    {
        static $instance;
        if($instance) {
            return $instance;
        }
        $instance = new static();
        return $instance;
    }
}

