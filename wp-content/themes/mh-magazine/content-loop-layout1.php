
<article class="mh-posts-large-item ">
	<div class="mh-posts-large-thumb">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php
			if (has_post_thumbnail()) {
				the_post_thumbnail('mh-magazine-medium');
			} else {
				echo '<img class="mh-image-placeholder" src="' . get_template_directory_uri() . '/images/placeholder-medium.png' . '" alt="' . esc_html__('No Picture', 'mh-magazine') . '" />';
			} ?>
		</a>		

	</div>
	<div class="mh-posts-large-content">
		<header class="mh-posts-large-header">
			<h3 class="mh-posts-large-title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark" target="_self">
					<?php the_title(); ?>				</a>
			</h3>
			<div class="mh-meta mh-posts-large-meta">
				<?php mh_magazine_loop_meta(); ?>
			</div>			
		</header>
		<div class="wishbone_postcat">
			<div class="wishbone_postcatdecor">
				<div class="wishbone_postcatdecor_inner">
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>	" target="_self">
						<?php the_category();	?>				</a>
				</div> <!-- end .wishbone_postcat -->
			</div> <!-- end .wishbone_postcat -->
		</div>
		<div class="mh-posts-large-excerpt clearfix">
			<?php the_excerpt(); ?>		
		</div>
		<div class="juliet-post-footer ">
			<!--Display Comment Count (optional)-->
			<div class="juliet-post-comment-count">
				<a href="<?php the_permalink(); ?>" target="_self">Comments <span class="juliet-post-bullet"><i class="fa fa-circle"></i></span><span></span></a><a class="mh-comment-count-link" href="<?php the_permalink(); ?>#mh-comments" target="_self">0</a>
				
			</div>
			<div class="juliet-post-excerpt-links">
				<span class="juliet-post-excerpt-border">
					<a href="<?php the_permalink(); ?>" class="excerpt-more-link" target="_self">continue reading</a>
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