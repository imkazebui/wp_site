<?php /* Template for displaying content of MH Posts Grid widget */ ?>
<article <?php post_class('mh-col-1-3 mh-posts-grid-item clearfix'); ?>>
	<div class="mh-posts-grid-thumb">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php
			if (has_post_thumbnail()) {
				the_post_thumbnail('mh-magazine-medium');
			} else {
				echo '<img class="mh-image-placeholder" src="' . get_template_directory_uri() . '/images/placeholder-medium.png' . '" alt="' . esc_html__('No Picture', 'mh-magazine') . '" />';
			} ?>
		</a>
		<div class="mh-image-caption mh-posts-grid-caption">
			<?php $category = get_the_category(); echo esc_attr($category[0]->cat_name); ?>
		</div>
	</div>
	<h3 class="mh-posts-grid-title">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
			<?php the_title(); ?>
		</a>
	</h3>
	<div class="mh-meta mh-posts-grid-meta">
		<?php mh_magazine_loop_meta(); ?>
	</div>
</article>