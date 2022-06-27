=== Posts From Category ===
Contributors: maneshtimilsina
Donate link: https://www.buymeacoffee.com/maneshtimilsina
Tags: posts from category, post listing, post list from category, widget, plugin, post listing widget, plugin to list posts, list posts from specific category, post, sidebar, post from category, list category post, category posts
Version: 5.0.1
Requires at least: 5.0
Tested up to: 6.0
Requires PHP: 5.6.20
Stable tag: 5.0.1
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== Description ==

Plugin to display posts from specific category. It comes with multiple layout option to display post list. Option to select category or exclude post is available wgich provide advance filter to your requirement. You can enable or disable posted date, thumbnail, read more button and more easily from widget.

Following features are offered by plugin:

* Multiple layout options to list posts
* Title field for your listing
* Select category from dropdown
* Order posts by author, title, id, date, number of comments, menu order or random 
* Order posts in Ascending or Descending order
* Select number of posts to display
* Exclude posts from listing
* Change word length of excerpt
* Enable/Disable featured image
* Select size of featured image
* Enable/Disable publish date
* Enable/Disable read more button and its text

= Useage of Shortcode: =

You can use shortcode to display your posts in the content area of your website. It is supported by Gutenberg Block, Page Builders like Elementor and more.

<pre>[pfc layout="layout-one" cat="0" order_by="date" order="DESC" post_number="5" length="10" readmore="Read More" show_date="true" show_image="true" image_size="full"]</pre>

Parameters supported by this plugin are explained below:

* <strong>layout: </strong> Supports 2 layouts (layout-one and layout-two)
* <strong>cat: </strong> Category ID
* <strong>order_by: </strong> Order your posts by author, title, ID, date, menu_order, comment_count, rand
* <strong>order: </strong> DESC or ASC
* <strong>post_number: </strong> Number of posts to show
* <strong>length: </strong> Length of excerpt. Set 0 to hide excerpt
* <strong>readmore: </strong> Read More text
* <strong>show_date: </strong> true or false
* <strong>show_image: </strong> true or false
* <strong>image_size: </strong> Supports thumbnail, medium, large, full or any size defined by the theme

= Elementor =

- If you are Elementor user and want to display posts in a grid you can use this plugin, [Post Grid Elementor Addon](https://wordpress.org/plugins/post-grid-elementor-addon/)

= Other Useful Plugins =

- [Advanced Google reCAPTCHA](https://wordpress.org/plugins/advanced-google-recaptcha/)
- [Admin Customizer](https://wordpress.org/plugins/admin-customizer/)
- [WooCommerce Product Tabs](https://wordpress.org/plugins/woocommerce-product-tabs/)
- [Post Grid Elementor Addon](https://wordpress.org/plugins/post-grid-elementor-addon/)
- [Coming Soon & Maintenance Mode Page](https://wordpress.org/plugins/nifty-coming-soon-and-under-construction-page/)

= Recommended Themes =

A minimal WordPress theme optimized for Google Core Web Vitals and Search Engines

- [Hait](https://wordpress.org/themes/hait/)

== Installation ==

1. Download the plugin from plugin directory

2. Extract the file contents 

3. Upload the directory to your WordPress plugins' directory ( /wp-content/plugins/ )

4. Activate the plugin from the WordPress Dashboard

5. Go to Widgets, add 'Post From Category' widget to your desire sidebar

6. Fill in the desired fields and we're good to go

== Frequently Asked Questions ==

= Does this plugin provide shortcode ? =

Yes, you can find PFC shortcode icon at the top bar of WP Editor. Click on it to insert shortcode. 

= Can I use this plugin using Gutenberg block or Elementor widget ? =

Yes, you can use the shortcode block of Gutenberg (and shortcode in Elementor widget) to show your posts.

= Where can I find setting for plugin? =

This plugin do not have separate setting page. You can provide necessary details in widgets. 


== Screenshots ==

1. Backend View
2. Frontend View

== Changelog ==

= 5.0.1 =
- Admin page added

= 5.0.0 =
- Tested with latest version (5.9) of WordPress
- Shortcode information added

= 4.0.2 = 
- Tested with latest version (5.4) of WordPress

= 4.0.1 =
- Escape issue fixed
- Layout option added
- Basic style added for post list
- Option to select thumbnail of theme added

= 3.1.2 =
- Tested upto WordPress 4.4

= 3.1.1 =
- Romanian language added


= 3.0.1 =
- Widget updated. 
- Tested upto WordPress 4.3

= 2.0.1 =
- Plugin translated in German language. 
- Solved the issue with the number of posts control.

= 1.0.2 =
- Author details changed. 
- Donation link changed.

= 1.0.1 =
- Excerpt length bug fixed.
- Dynamic thumbnail sizes added.

= 1.0.0 =
- First publicly distributable version
