<?php /* Template Name: Sitemap */ ?>
<?php get_header(); ?>
<div class="mh-wrapper">
	<?php mh_before_page_content(); ?>
	<?php mh_magazine_page_title(); ?>
	<div class="mh-row mh-sitemap clearfix">
		<div class="mh-col-1-3">
			<h5 class="mh-widget-title">
				<span class="mh-widget-title-inner">
					<?php esc_html_e('Recent Articles', 'mh-magazine'); ?>
				</span>
			</h5>
			<ul class="mh-sitemap-list"><?php
				$args = array('posts_per_page' => 10);
				$recent = new WP_query($args);
				while ($recent->have_posts()) : $recent->the_post(); ?>
					<li class="sitemap-list-item">
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</li><?php
				endwhile; wp_reset_postdata(); ?>
			</ul>
			<h5 class="mh-widget-title">
				<span class="mh-widget-title-inner">
					<?php esc_html_e('Pages', 'mh-magazine'); ?>
				</span>
			</h5>
			<ul class="mh-sitemap-list"><?php
				$args = array('title_li' => '', 'post_status' => 'publish');
				wp_list_pages($args); ?>
			</ul>
		</div>
		<div class="mh-col-1-3">
			<h5 class="mh-widget-title">
				<span class="mh-widget-title-inner">
					<?php esc_html_e('Archives', 'mh-magazine'); ?>
				</span>
			</h5>
			<ul class="mh-sitemap-list">
				<?php wp_get_archives('type=monthly&show_post_count=1'); ?>
			</ul>
		</div>
		<div class="mh-col-1-3">
			<h5 class="mh-widget-title">
				<span class="mh-widget-title-inner">
					<?php esc_html_e('Categories', 'mh-magazine'); ?>
				</span>
			</h5>
			<ul class="mh-sitemap-list"><?php
				$args = array('title_li' => '', 'feed' => 'RSS', 'show_option_none' => esc_html__('No categories', 'mh-magazine'));
				wp_list_categories($args); ?>
			</ul>
		</div>
	</div>
</div>
<?php get_footer(); ?>