=== More privacy for comments ===
Contributors: floeff
Tags: comment, anonymous, anonymity, privacy, gdpr, dsgvo
Requires at least: 4.9
Tested up to: 4.9
Requires PHP: 5.6
Stable tag: trunk
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Hides e-mail and URL fields for new blog comments and omits saving of commenter IP address for more privacy

== Description ==
This plugin helps creating more privacy for blog comments. It hides the input fields for e-mail and URL in new blog comments and omits storing the IP addresses of commenter in the WordPress database. It also disables the notice that e-mail addresses are not being made public. This helps to reduce the data collected from users and as such can be part of a good privacy approach for your blog. Please do read the FAQ section for important further details.

== Installation ==
1. Upload the plugin files to the `/wp-content/plugins/more-privacy-for-comments` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress.
1. Configure your WordPress instance to not require name and e-mail address in the 'Discussion' preferences.
1. Please double check the plugin appearance and functionality within your blog by doing a test comment. While it should work properly on several themes, it has only been tested with the Twenty Sixteen theme.

== Frequently Asked Questions ==
= What does this plugin do? =
It hides the input fields for e-mail and URL in new blog comments and omits storing the IP addresses of commenter in the WordPress database. It also disables the notice that e-mail addresses are not being made public, as no e-mail addresses will be collected. Please double-check your blog's settings wrt. registered users to see this is true actually!

= What does this plugin NOT do? =
It does not change existing comments and remove data from there, so you have to manually edit the SQL database for that. It neither provides further privacy mechanisms. For a proper privacy approach for your blog, you might need to take additional steps, like reconfiguring your web server and backup system. There are further WordPress plugins available for privacy improvements. Please keep in mind that this plugins is only a small piece to help with a very specific topic.

= Has this plugin been thoroughly tested? =
No, you use it at your own risk, I give no guarantees whatsoever. I have tested it with the Twenty Sixteen theme, and while in theory it should work with several themes and in conjunction with other plugins, it's your responsibility to test it in your concrete setup.

= Do you accept patches? =
Very much indeed so. As you see from the code, this plugin is very, very basic. Any feature additions, bug fixes and enhancements are highly welcome!

= Can I collect even less data? =
Yes, indeed! You can manually override the text of the name form field to pre-define an anonymous value, and explain to your users that anonymous or nicknames are preferred. See https://blog.effenberger.org/more-privacy-for-comments/ for a sample code snippet.

== Screenshots ==
1. The reduced comment form without e-mail and URL fields

== Changelog ==
= 1.0 =
* Initial release of the plugin
