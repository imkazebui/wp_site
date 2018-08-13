<?php $mh_magazine_options = mh_magazine_theme_options(); ?>
<?php get_header(); ?>
<div class="mh-wrapper clearfix">
	<div class="mh-main clearfix">
		<div id="main-content" class="mh-loop mh-content"><?php
			mh_before_page_content();
			mh_magazine_page_title();
			if (category_description()) { ?>
				<div class="entry-content mh-category-desc">
					<?php echo category_description(); ?>
				</div><?php
			}
			if (is_author()) {
				mh_magazine_author_box();
			}
			if (have_posts()) {
				while (have_posts()) : the_post();
					get_template_part('content', 'loop-' . $mh_magazine_options['loop_layout']);
				endwhile;
				mh_magazine_pagination();
			} else {
				get_template_part('content', 'none');
			} ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
	<?php mh_magazine_second_sidebar(); ?>
</div>
<?php get_footer(); ?>