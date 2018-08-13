<?php /* Template Name: Authors */ ?>
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
			endwhile;
            $users = get_users('orderby=post_count&order=DESC');
			foreach ($users as $current) {
				if (!in_array('subscriber', $current->roles)) {
					$authors[] = $current;
				}
			}
			foreach ($authors as $author) {
				$mh_author_box_ID = $author->ID;
				get_template_part('content', 'author-box');
			} ?>
        </div>
		<?php get_sidebar(); ?>
    </div>
    <?php mh_magazine_second_sidebar(); ?>
</div>
<?php get_footer(); ?>