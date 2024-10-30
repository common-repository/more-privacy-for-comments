<?php

/*
Plugin Name: More privacy for comments
Plugin URI: https://blog.effenberger.org/more-privacy-for-comments/
Description: Hides e-mail and URL fields for new blog comments and omits saving of commenter IP address for more privacy
Version: 1.0.0
Author: Florian Effenberger
Author URI: https://blog.effenberger.org
*/

/* Hide e-mail and URL fields */
function moreprivacyforcomments_hide_fields($fields)
{
 unset($fields['email']);
 unset($fields['url']);
 return $fields;
}

/* Disable the notice text about e-mails, as there is no respective form field anymore */
function moreprivacyforcomments_disable_notes($arg)
{
 $arg['comment_notes_before'] = "";
 return $arg;
}

/* Only store empty IP addresses for comments */
function moreprivacyforcomments_dont_store_ip($comment_author_ip) {
return '';
}

add_filter('comment_form_default_fields','moreprivacyforcomments_hide_fields');
add_filter('comment_form_defaults', 'moreprivacyforcomments_disable_notes');
add_filter('pre_comment_user_ip', 'moreprivacyforcomments_dont_store_ip', 50);
?>
