<?php

namespace FluentForm\App\Helpers;

class Str
{
    /**
     * Determine if a given string starts with a given substring.
     *
     * @param string $haystack
     * @param string|array $needles
     * @return bool
     */
    public static function startsWith($haystack, $needles)
    {
        if(is_array($haystack)) {
            $haystack = implode(' ', $haystack);
        }

        foreach ((array) $needles as $needle) {
            if ($needle != '' && substr($haystack, 0, strlen($needle)) === (string) $needle) {
                return true;
            }
        }

        return false;
    }

    /**
     * Determine if a given string ends with a given substring.
     *
     * @param string $haystack
     * @param string|array $needles
     * @return bool
     */
    public static function endsWith($haystack, $needles)
    {
        if(is_array($haystack)) {
            $haystack = implode(' ', $haystack);
        }
        foreach ((array) $needles as $needle) {
            if (substr($haystack, -strlen($needle)) === (string) $needle) {
                return true;
            }
        }

        return false;
    }

    /**
     * Determine if a given string contains a given substring.
     *
     * @param string $haystack
     * @param string|array $needles
     * @return bool
     */
    public static function contains($haystack, $needles)
    {
        if(is_array($haystack)) {
            $haystack = implode(' ', $haystack);
        }

        foreach ((array) $needles as $needle) {
            if ($needle != '' && fluentform_mb_strpos($haystack, $needle) !== false) {
                return true;
            }
        }

        return false;
    }

    /**
     * Determine if a given string does not contain a given substring.
     *
     * @param string $haystack
     * @param string|array $needles
     * @return bool
     */
    public static function doNotContains($haystack, $needles)
    {
        return !self::contains($haystack, $needles);
    }
}
