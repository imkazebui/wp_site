<?php /* Template for displaying content of MH Posts Large widget */ ?>
<article <?php post_class('mh-posts-large-item'); ?>>
	<div class="mh-posts-large-thumb">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php
			if (has_post_thumbnail()) {
				the_post_thumbnail('mh-magazine-content');
			} else {
				echo '<img class="mh-image-placeholder" src="' . get_template_directory_uri() . '/images/placeholder-content.png' . '" alt="' . esc_html__('No Picture', 'mh-magazine') . '" />';
			} ?>
		</a>
		<div class="mh-image-caption mh-posts-large-caption">
			<?php $category = get_the_category(); echo esc_attr($category[0]->cat_name); ?>
		</div>
	</div>
	<div class="mh-posts-large-content">
		<div>
			<header class="mh-posts-large-header">
				<h3 class="mh-posts-large-title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
						<?php the_title(); ?>
					</a>
				</h3>
				<div class="mh-meta mh-posts-large-meta">
					<?php mh_magazine_loop_meta(); ?>
				</div>
			</header>
			<div class="mh-posts-large-excerpt clearfix">
				<?php the_excerpt(); ?>
			</div>
		</div>
	</div>
</article>