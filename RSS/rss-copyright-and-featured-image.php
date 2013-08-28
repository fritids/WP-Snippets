<?php
// ------------------------------------------------------------------------------
// Include Featured Image & Add Link Back To Original Post
// http://www.paulund.co.uk/7-tips-to-improve-your-wordpress-rss-feed
// ------------------------------------------------------------------------------

function feed_copyright_disclaimer($content) {  
global $post;
if(has_post_thumbnail($post->ID)) {
$featuredImage = '<p style="text-align:center;"><a href="' . get_permalink() . '">' . get_the_post_thumbnail($post->ID,"medium-large") .
'</a></p>';
}
$content = $featuredImage.get_the_content().'<p>This post was published at <a href="' . get_permalink() . '">' . get_bloginfo('name') . '</a>.</p>';   
 return $content;
}  
add_filter('the_excerpt_rss','feed_copyright_disclaimer'); 
add_filter('the_content_feed','feed_copyright_disclaimer');

?>
