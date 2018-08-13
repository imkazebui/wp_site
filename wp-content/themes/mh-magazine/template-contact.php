<?php /* Template Name: Contact */ ?>
<?php $mh_magazine_options = mh_magazine_theme_options(); ?>
<?php get_header(); ?>
<div class="mh-wrapper clearfix">
	<div class="mh-main clearfix">
    	<div id="main-content" class="mh-content"><?php
    		while (have_posts()) : the_post();
				mh_before_page_content();
				mh_magazine_page_title(); ?>
				<div <?php post_class('entry-content clearfix'); ?>>
					<?php the_content(); ?>
				</div><?php
			endwhile; ?>
        </div>
        <?php if ($mh_magazine_options['sidebars'] != 'no') { ?>
        	<aside class="mh-widget-col-1 mh-sidebar">
    			<?php dynamic_sidebar('mh-contact'); ?>
			</aside>
		<?php } ?>
    </div>
    <?php if ($mh_magazine_options['sidebars'] == 'two') { ?>
    	<aside class="mh-widget-col-1 mh-sidebar-2 mh-margin-left">
    		<?php dynamic_sidebar('mh-contact-2'); ?>
		</aside>
    <?php } ?>
</div>
<?php get_footer(); ?>