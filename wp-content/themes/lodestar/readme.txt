=== Lodestar ===

Contributors: automattic
Tags: white, light, business, trendy, featured-image-header, featured-images, flexible-header, infinite-scroll, rtl-language-support, theme-options, threaded-comments, translation-ready, responsive-layout, one-column, two-columns, right-sidebar, one-page

Requires at least: 4.0
Tested up to: 4.7
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Lodestar is a trendy one-page theme designed with startups and small business ventures in mind.

== Description ==

Description

== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= Does this theme support any plugins? =

Lodestar includes support for Jetpack's Infinite Scroll and Site Logos, as well as other features.


== Setting Up Your Front Page ==

The page you assigned as your Static Front Page will automatically display a single panel with a full-screen featured image, site logo and/or title, menu, and page content underneath.

You can add more content to your front page by adding panels. Each panel is created from a static page on your site.

To add additional panels to your Front page, follow these steps:

1. Create or edit a page.
2. To add a large image to the top of the panel, assign a Featured Image to the page. This image should be at least 2000 pixels wide and 1200 pixels tall.
3. Publish your page.
4. Navigate to Customize → Theme Options. From the drop-down, select the page you’d like to appear in the panel.
5. For each panel, you also have the option to display the page's content in one or two columns.

Lodestar supports up to four different panels; the theme will only display the panels you add, so you can opt to add fewer.


== Front Page Footer Image ==

The last panel of the front page is an optional full-size image. This can be assigned under Customize → Theme Options → Footer Image.


== Add Header Top Text ==

You can add two strings of text to the top of Lodestar, next to the menu. This allows you to keep your contact information or call to action visible on all pages throughout the site.

To add your own text, navigate to Customize → Theme Options → Header Top Text. It's recommended that you only use short strings of text here. You can include links and other HTML in the Header Top Text fields.


== Portfolio (requires Jetpack: jetpack.me) ==

Lodestar helps you showcase your company's work as portfolio projects. Each project is displayed with its featured image and additional information is displayed on hover.

Once you've added some portfolio projects to your website, they will be visible at http://yourgroovysite.wordpress.com/portfolio.

You can also apply Lodestar's Portfolio Template to a page, which allows visitors to sort your creative works by Project Type. The Portfolio Template will display up to 120 projects. 


== Testimonials (requires Jetpack: jetpack.me) ==

Add testimonials to your Lodestar website to share what others have been saying about your work. You can view the testimonial archive by adding /testimonial to your URL.

You can also apply Lodestar's Testimonial Template to display your testimonials on any page of the site.


== Custom Menus ==

Lodestar includes one Custom Menu in the header, which can be configured via My Sites → Menus. If no menu is assigned, this area will display a list of your pages by default.


== Social Links Menu (requires Jetpack: jetpack.com) ==

With Lodestar, you have the option to display links to your social media profiles in the header and footer. To display them, set up a Social Links Menu.


== Widget Areas ==

Lodestar offers four widget areas:

* The optional Sidebar, which appears on the right on all posts and pages, excluding the static front page.
* Three optional Footer widget areas.

If the Sidebar area is not active, the theme automatically adjusts to have a single column.


== Site Logo ==

Brand identity is very important — that’s why Lodestar supports the Site Logo feature. To add your own image, go to Customize → Site Identity. The logo will appear in the header, above the site title.


== Custom Background ==

Custom color, pattern, or a beautiful image – the choice is yours. To change the background, visit Customize → Colors & Backgrounds from your dashboard.


== Quick Specs (all measurements in pixels) ==
* The main column width is up to 1120 wide on the static front page, and 700 wide on the blog index, archive, single posts, and pages.
* The optional sidebar is up to 336 wide.
* The recommended Featured Image size is at least 2000 wide by 1200 tall. The theme will scale and crop the images depending on the page and device size.
* The recommended Custom Header image size is at least 2000 wide by 1200 tall.
* The Site Logo will display up to 200 tall; larger logo sizes are recommended as they will display sharper on retina devices.


== Changelog ==

= 3 March 2018 =
* Use wp_kses_post rather than wp_filter_post_kses.
* Use wp_kses_post rather than wp_filter_post_kses.

= 23 February 2018 =
* Fix the issue with product gallery images becoming taller on hover

= 22 February 2018 =
* Revert the fix for the issue with product gallery images becoming taller on hover
* Fix the issue with product gallery image becoming taller on hover
* Fix the incorrect WooCommerce image sizes
* Update lazy load placeholder image to match the aspect ratio of the images, rather than a square. This helps prevent gaps in the layout on mobile.

= 21 February 2018 =
* Define WooCommerce image sizes

= 31 January 2018 =
* Add copyright information. Bump version number.

= 29 January 2018 =
* Manually list the logo's height and width, rather than using add_image_size -- the latter doesn't

= 25 January 2018 =
* Replace support for Jetpack's Site Logo for Core's Custom Logo. Make sure the output uses the same CSS classes for existing sites, and that the logo is sized correctly.

= 22 January 2018 =
* Correcting escaping function used in top menu aria label.
* Removed some unused WooCommerce variables; they were being used to assess whether we were on a product page but then that returned value is never used.
* Switch to use has_post_thumbnail for featured image check, and make sure portfolio template is using actual project alt tags for featured images.
* Add singular version of comment count string, for different translations.

= 15 January 2018 =
* Simplify Headstart annotations for all themes in signup.

= 29 December 2017 =
* Add previous/next navigation to portfolio archives, for self-hosted sites not using infinite scroll.
* Replace ->ID with get_the_post function in a handful of portfolio-related projects, to get rid of notices on self-hosted sites.

= 27 November 2017 =
* Add continue reading link to post excerpts.

= 22 November 2017 =
* Correcting text domain. Bump version number.

= 19 November 2017 =
* Add full WooCommerce integration.

= 7 November 2017 =
* Fixing contrast issue with the theme's button background in the colour annotations.

= 7 September 2017 =
* Undo the changes to color annotations I inadverently commited.
* Vertically center the call to action content.

= 14 May 2017 =
* updated translations

= 15 April 2017 =
* Add languages directory and POT file to Lodestar.

= 14 April 2017 =
* Remove styles related to full-width template - the template was removed before the theme launched.

= 11 April 2017 =
* Removing right/left margin auto when the site branding is display: flex.

= 31 March 2017 =
* Use SVG for the social menu

= 22 March 2017 =
* add Custom Colors annotations directly to the theme
* move fonts annotations directly into the theme

= 18 March 2017 =
* Removing border from top of blog posts that appear on the front page. They were appearing by accident on posts without featured images, due to conflicting styles.

= 17 March 2017 =
* Improving how the header height is updated.
* Making portfolio classes more specific to avoid edge case where, when you assign the portfolio page to the front page, it's not assigned (because there's a front-page.php), but the template class is added to the body anyway, causing layout issues.
* Removing transition on header image. It was originally intended to smooth things out when the top margin had to be adjusted for taller headers, but it makes the change much more obvious instead. Noticed while testing another issue;
* Add check for when wf-active class is added for custom fonts. That way the header height can be re-calculated, preventing a gap when smaller fonts are used.

= 15 March 2017 =
* Belatedly adding Headstart annotations.

= 14 March 2017 =
* Removing unneeded console.log.
* Making minor adjustments to when JavaScript is fired to prevent gaps in header area.

= 2 March 2017 =
* Add check to make sure  exists and has actual categories assigned before echoing.

= 25 February 2017 =
* Making RTL

= 24 February 2017 =
* Hiding date on sticky posts, and making sure post meta is properly capitalized.
* Don't show categories with blog posts when they appear on static front page.
* Wrapping prefixes for author and categories in spans with class, to use to capitalize the whole like when the date or author is hidden.
* Update readme to include setup steps.
* Correcting error in Aria label.
* Adding aria-label to top menu.
* Simplifying code that checks to see if there's more than one category, based on code used in Twenty Seventeen.

= 23 February 2017 =
* Replacing inline comments with the_comments_navigation function.
* Adding space to RSS widget items, and fixing CSS formatting around the widget area of the stylesheet.
* Fixing grid gallery styles.
* Spacing out numbers for paginated posts.
* updating sticky header styles, to make sure the header doesn't stick when it's more than three levels tall (since it can cover a lot of the page).
* Fixing underline styles on tag clouds.
* Reversing iOS check so the image size changing while loading affects a smaller number of screens.
* Fixing issue with iOS distorting images with background-position: fixed. Reducing size of headers in blog posts on the front page.
* Updating excerpt footer area to remove link to comments, and only show edit link.
* Add support for selectively refresing widgets.
* Fix dropdown menu on touch devices.

= 21 February 2017 =
* Update logic used on the front-page.php to mimic what was used in Twenty Seventeen.
* Adding cursor styles for buttons on hover; correcting default colour for header text.
* Fixing odd hover styles on linked images.
* Correcting featured image size on blog index, archives.
* Updating Content Options settings to include featured images, refine behaviour. Outstanding: better behaviour with connecting terms (by, on), when other elements are hidden (eg capitalizing by when there's no date in front of the author name).

= 20 February 2017 =
* Adding Recent Posts support to the front page panels. Renaming content-search.php to content-excerpt to be used here, and updating styles.
* Remove unnecessary use of  from lodestar_body_classes, to prevent errors. Updating comment in front-page.php, to make more accurate.
* Add jquery as a dependancy for global.js.
* Remove deprecated HEADER_TEXTCOLOR constant, and unneeded example in file's header.
* Making updates to readme.txt, primarily to include theme information and license information. Will need to revisit to include FAQs.
* Make sure there are categories to show before trying to echo them, to prevent an error being thrown.
* Replacing deprecated :before and :after with ::before and ::after.

= 7 February 2017 =
* Replace get_the_tag_list() with the_tags() for a more straightforward approach that prevents potential fatal errors.

= 13 September 2016 =
* Fix icon placement for nested comments by the post author.

= 9 September 2016 =
* Fix Customizer issues:

= 8 September 2016 =
* Correct name of Jetpack Content Options (had original name, Content Settings.

= 7 September 2016 =
* Update _s credit to Components, which is actually the correct starter theme.

= 6 September 2016 =
* Adjust space around testimonial profiles. Revert portfolio ordering, and fix minor RTL issue.
* Correct queries for testimonials and portfolios on the front-page.
* Add sidebar to testimonials template.
* Correct query variable name to fix error in testimonial template.
* Adjust spacing and styles for testimonials, portfolios on front page. Update placeholder panels to use the same markup as regular panels.

= 5 September 2016 =
* Allow testimonials to display on front-page.php if the page with the testimonial template is added to one of the panels. Update styles to display the testimonials in two columns on larger screens.
* Add functionality to front-page.php so a placeholder panel label is visible in the Customizer. This way, the Customzier can scroll to the appropriate panel space, even when empty, and users can
* Add Testimonial template. The primary purpose will be so Testimonials can be displayed as a front page panel, similar to Pique.

= 29 August 2016 =
* Update front page panels to check if a user picked a page with the portfolio template as a panel. If yes, display 6 most recent projects.

= 19 August 2016 =
* Remove author, postdate and tags from portfolio landing page view, and author and date from single view. Remove seperate post meta and post footer files, since they only had tags and very minimal markup - moved them right into template files.
* Hide 'Types' label before Porfolio types; update CSS to remove reference.
* Specify content width on front page template, since it's wider. Adjust vertical placement of navigation.
* Update logo size to cap the logo height and width.
* Increase custom header image size.
* Increase header z-index when fixed, so DM icons in the customizer don't overlap. Increase space under featured images.

= 16 August 2016 =
* Fix input display on iOS devices. Tweak flyout menu styles so they don't sit side by side with wide top-level menu items.

= 15 August 2016 =
* Comment style
* Removing centre alignment from archive/search page title.
* Reduce height of header by reducing navigation padding.
* Add class when top header content isnt present; adjust styles so menu is centred when there is no top header content.
* Fix spacing/styles on pages and meta widgets.
* Move div inside of featured image check for portfolio projects, to save outputting an unnecessary div when there is no image.
* Increase featured image size. Remove unused class from portfolio projects. Update logic for portfolio projects so lazy-loading markup is only loaded on portfolio template.
* Fix incorrect function prefix.

= 9 August 2016 =
* Fix spacing issue on tablet-sized screens for the custom header image. Update tags to remove startup.

= 8 August 2016 =
* Remove top padding on entry header.
* Fix issue with portfolio project text now showing when there's no featured image.

= 5 August 2016 =
* Adjust spacing around headers, primarily for front page template, but also for regular content.
* Style tweaks:

= 4 August 2016 =
* Fix menu issues in RTL styles.
* Add container to header text for RTL styles.

= 3 August 2016 =
* First pass of RTL styles. Clean up style.css.
* Update default header image to match one used in demo; update license information for image in readme.txt.
* Increase portfolio template project limit to 120. Remove commented out posts_per_page code, and add a comment explaining why there's a fixed per page query.
* Add escaping to class attribute.
* Add :focus styles for links, buttons.
* Move navigation so theme can be tabbed through in a logical order.

= 2 August 2016 =
* Tidy up theme files; remove unneeded comments and fix translation strings. Update formatting.

= 29 July 2016 =
* Remove childpages from front page panels.
* Override a couple of the Jetpack social icons to use the ones without boxes, so they look better in the little circles.
* Update screenshot.

= 22 July 2016 =
* Improve lazy loading images so they're loaded when filtering projects, too. Adjust isotope settings to make for smoother transitions when resizing the browser window. Update variable names to make them more clear, and add comments to explain what different bits of code does.

= 21 July 2016 =
* Add lazy loading for Portfolio projects. Remove imagesLoaded JS and functions, because they're not really needed in the portfolio - all the projects are displaying at the same height.

= 20 July 2016 =
* Reduce max portfolio projects that will be loaded in the portfolio template.
* Add CSS3 styles for Isotope animation; include language direction in settings.
* Switch portfolio template to use Isotope rather than Masonry, for better/quicker sorting.
* Move filtering functionality to a new portfolio template, rather than right in the portfolio archives.
* Add rough 'sort by type' functionality to portfolio archive main page.
* Minor style tweaks:

= 19 July 2016 =
* Add background to portfolio projects with no featured image. Adjusting portfolio project height.
* Update porftolio styles to match mock. Includes adjusting Jetpack settings to make sure it's consistent for infinite scroll.
* Remove unused testing code.
* Fix issues with portfolio display. Minor code formatting
* Add sidebar space to portfolio pages.
* Make sure portfolio types and tags are displaying like regular post tags and categories. This includes making sure they actually work, and that they use the same markup and tags.
* Tweak code formatting in single.php.
* Refining theme portfolio setup and functionality.
* Add basic portfolio support. Include archive pages and content parts. Include type navigation on archive pages.
* Remove full-width template based on feedback.

= 13 July 2016 =
* Add default custom header image; update image sizes to removed mostly-unused size, and make them more accurate to how the site looks.
* Style tweaks based on feedback:

= 11 July 2016 =
* Add full-width template and tweak styles for it.
* Update header colours to help smaller ones stand out more. Tweaking menu dropdown styles to fix minor issue.
* Add note about main image source in readme; likely to be used as default header image.
* Update menu styles.
* Remove link from site description.
* Move one or two column option into Customizer for front page (rather than assigning depending on whether a page has childpages or not).
* Remove reference to deleted frontpage.js file.
* Remove code for on-page scrolling for front page. Didn't actually include on page anchor navigation.
* Remove unneeded second front page template.

= 9 July 2016 =
* Correct class used for second block of text in header.
* Reorder theme-specific Customizer panels so the footer is as the bottom - now it matches the order things appear on the site. Update footer 'label' to read 'Footer Image', which is more accurate and descriptive than just 'footer'.
* Adding same dotted border and scrollTo functionality to the footer image on the front page, to behave similar to the panels.

= 8 July 2016 =
* Improve Customizer labels. Update names, variables and classnames to match.
* Adjust spacing between testimonials, so they're more distinct from eah other.
* Testimonial style improvements; adding sidebar and fixing markup in in testimonial archive page.
* Add JavaScript functionality from Pique, to make the Customizer scroll to the panel you're current editing, to improve UX.
* Improvements to styles, including:
* Add separate file for WP.com styles and enqueue. Add styles for related posts, for improved display on mobile.

= 6 July 2016 =
* Add support for Content Options. Update styles to include author bio, and to adjust post footer padding so it's not noticeable when tags are hidden.

= 24 June 2016 =
* Add class and styles when a post/page doesn't have a featured-image. Adding headings styles; adding styles for post flair. Refire the header placement JavaScript on page load, so if you're halfway down the page, the header actually appears.
* Add some header sizes; reduce padding on header and decrease opacity.
* Improve header show/hide behaviour. Improve header height calculation.
* Building out theme, including:

= 23 June 2016 =
* A bunch of improvements, including:

= 22 June 2016 =
* Initial commit to pub repo.

== Credits ==

* Based on Components http://components.underscores.me/, (C) 2015-2016 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css http://necolas.github.io/normalize.css/, (C) 2012-2016 Nicolas Gallagher and Jonathan Neal, [MIT](http://opensource.org/licenses/MIT)
* Isotope http://isotope.metafizzy.co/ (C) 2016 Metafizzy [GPLv3 or later] (https://www.gnu.org/licenses/gpl-3.0.html)
* imagesLoaded https://github.com/desandro/imagesloaded (C) 2017 David DeSandro [MIT](http://opensource.org/licenses/MIT)
* ScrollTo https://github.com/flesler/jquery.scrollTo (C) 2007-2016 Ariel Flesler [MIT](http://opensource.org/licenses/MIT)
* Genericons icon font http://www.genericons.com (C) 2016 Automattic [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* Default header image http://negativespace.co/photos/woman-coding/, [C00] (https://creativecommons.org/publicdomain/zero/1.0/)
