<?php /* Template for default sidebar */
$mh_magazine_options = mh_magazine_theme_options();
if ($mh_magazine_options['sidebars'] != 'disable') { ?>
	<aside class="mh-widget-col-1 mh-sidebar">
		<?php dynamic_sidebar('mh-sidebar'); ?>
	</aside><?php
} ?>