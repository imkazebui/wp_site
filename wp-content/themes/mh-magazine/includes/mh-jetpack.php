<?php

/***** Add Support for Infinite Scroll *****/

function mh_magazine_infinite_scroll() {
	add_theme_support('infinite-scroll', array(
    	'container' 		=> 'main-content',
		'footer_widgets' 	=> array('mh-footer-1', 'mh-footer-2', 'mh-footer-3', 'mh-footer-4'),
		'render'   			=> 'mh_magazine_infinite_scroll_render',
	));
}
add_action('after_setup_theme', 'mh_magazine_infinite_scroll');

if (!function_exists('mh_magazine_infinite_scroll_render')) {
	function mh_magazine_infinite_scroll_render() {
		$mh_magazine_options = mh_magazine_theme_options();
		while (have_posts()) {
			the_post();
			get_template_part('content', 'loop-' . $mh_magazine_options['loop_layout']);
		}
	}
}

?>