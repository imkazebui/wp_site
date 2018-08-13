<?php

/***** Declare WooCommerce Compatibility *****/

add_theme_support('woocommerce');

/***** Register WooCommerce Sidebar *****/

function mh_woocommerce_sb_init() {
	register_sidebar(array('name' => __('WooCommerce', 'mh-magazine'), 'id' => 'mh-woocommerce', 'description' => __('Widget area (sidebar) on WooCommerce pages', 'mh-magazine'), 'before_widget' => '<div class="mh-widget sb-woocommerce">', 'after_widget' => '</div>', 'before_title' => '<h4 class="mh-widget-title">', 'after_title' => '</h4>'));
}
add_action('widgets_init', 'mh_woocommerce_sb_init');

/***** Custom WooCommerce Markup *****/

remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

function mh_themes_wrapper_start() { ?>
	<div class="mh-wrapper clearfix">
		<div class="mh-main">
			<div id="main-content" class="mh-content entry-content"> <?php
}
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
add_action('woocommerce_before_main_content', 'mh_themes_wrapper_start', 10);

function mh_themes_wrapper_end() { ?>
			</div>
			<?php $mh_magazine_options = mh_magazine_theme_options(); ?>
			<?php if ($mh_magazine_options['sidebars'] != 'no') { ?>
				<aside class="mh-widget-col-1 mh-sidebar">
	  				<?php dynamic_sidebar('mh-woocommerce'); ?>
	  			</aside>
	  		<?php } ?>
	  	</div>
	  	<?php mh_magazine_second_sidebar(); ?>
  	</div> <?php
}
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_after_main_content', 'mh_themes_wrapper_end', 10);

/***** Load Custom WooCommerce CSS *****/

function mh_woocommerce_css() {
    wp_register_style('mh-woocommerce', get_template_directory_uri() . '/woocommerce/woocommerce.css');
    wp_enqueue_style('mh-woocommerce');
}
add_action('wp_enqueue_scripts', 'mh_woocommerce_css');

?>