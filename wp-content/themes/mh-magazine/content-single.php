
<article class="mh-posts-large-item post-content" id="post-<?php the_ID(); ?>">
	<div class="mh-posts-large-content tlg-posts-large-content">
		<header class="mh-posts-large-header">
			<h3 class="mh-posts-large-title">
				<a title="<?php the_title(); ?>" rel="bookmark" target="_self">
					<?php the_title(); ?>				</a>
			</h3>
			<div class="mh-meta mh-posts-large-meta">
				<?php mh_magazine_loop_meta(); ?>
			</div>			
		</header>
	</div>
	<div class="mh-posts-large-thumb">
		<a title="<?php the_title(); ?>"><?php
			if (has_post_thumbnail()) {
				the_post_thumbnail('mh-magazine-medium');
			} else {
				echo '<img class="mh-image-placeholder" src="' . get_template_directory_uri() . '/images/placeholder-medium.png' . '" alt="' . esc_html__('No Picture', 'mh-magazine') . '" />';
			} ?>
		</a>		

	</div>
	<div class="mh-posts-large-content">
		<?php dynamic_sidebar('mh-posts-1'); ?>
		<div class="entry-content clearfix"><?php
			mh_post_content_top();
			the_content();
			mh_post_content_bottom(); ?>
		</div>
		<?php the_tags('<div class="entry-tags clearfix"><i class="fa fa-tag"></i><ul><li>','</li><li>','</li></ul></div>'); ?>
		<?php dynamic_sidebar('mh-posts-2'); ?>
		<div class="juliet-post-footer ">
			<!--Display Comment Count (optional)-->
			<div class="juliet-post-comment-count">
				<a href="<?php the_permalink(); ?>" target="_self">Comments <span class="juliet-post-bullet"><i class="fa fa-circle"></i></span><span></span></a><a class="mh-comment-count-link" href="<?php the_permalink(); ?>#mh-comments" target="_self">0</a>
				
			</div>
			<div class="juliet-post-excerpt-links">
				<span class="juliet-post-excerpt-border">
					<a href="<?php the_permalink(); ?>" class="excerpt-more-link" target="_self">share this post</a>
				</span>
			</div>

 			<!--Display Comment Count (Mobile)-->
			<div class="juliet-post-comment-count juliet-post-mobile-count">
				<a href="<?php the_permalink(); ?>" target="_self">Comments <span class="juliet-post-bullet"><i class="fa fa-circle"></i></span><span>2</span>
				</a>				
			</div>
			<!--Display Share Buttons (optional)-->
			<div class="juliet-post-share-buttons">
				<a target="_self" href="<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a>
				<a target="_self" href="<?php the_permalink(); ?>"><i class="fa fa-twitter"></i></a>
				<a target="_self" href="<?php the_permalink(); ?>"><i class="fa fa-pinterest-p"></i></a>
				<a target="_self" href="<?php the_permalink(); ?>"><i class="fa fa-google-plus"></i>
				</a>
			</div>
		</div>
	</div>
</article>