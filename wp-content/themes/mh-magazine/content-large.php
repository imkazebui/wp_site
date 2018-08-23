<?php /* Template for displaying content of MH Posts Large widget */?>
<article <?php post_class('mh-posts-large-item');?>>
	<div class="mh-posts-large-thumb">
		<a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>">
			<?php
				if (has_post_thumbnail()) {
						the_post_thumbnail('mh-magazine-content');
				} else {
						echo '<img class="mh-image-placeholder" src="' . get_template_directory_uri() . '/images/placeholder-content.png' . '" alt="' . esc_html__('No Picture', 'mh-magazine') . '" />';
				}
			?>
		</a>
		<!-- <div class="mh-image-caption mh-posts-large-caption">
			// < ?php $category = get_the_category(); echo esc_attr($category[0]->cat_name); ?>
		</div> -->
	</div>
	<div class="mh-posts-large-content">
		<header class="mh-posts-large-header">
			<h3 class="mh-posts-large-title">
				<a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>" rel="bookmark">
					<?php the_title();?>
				</a>
			</h3>
			<div class="mh-meta mh-posts-large-meta">
				<?php mh_magazine_loop_meta();?>
			</div>
		</header>
		<div class="wishbone_postcat">
			<div class="wishbone_postcatdecor">
				<div class="wishbone_postcatdecor_inner">
					<a href="<?php the_permalink();?>" rel="bookmark" title="<?php the_title_attribute();?>">
						<?php $category = get_the_category(); echo esc_attr($category[0]->cat_name);?>
					</a>
				</div> <!-- end .wishbone_postcat -->
			</div> <!-- end .wishbone_postcat -->
		</div>
		<div class="mh-posts-large-excerpt clearfix">
			<?php the_excerpt();?>
		</div>
		<div class="juliet-post-footer ">
			<!--Display Comment Count (optional)-->
			<div class="juliet-post-comment-count">
				<a href="<?php the_permalink();?>">Comments <span class="juliet-post-bullet"><i class="fa fa-circle"></i></span><span><?php mh_magazine_comment_count();?></span>
				</a>
			</div>
			<div class="juliet-post-excerpt-links">
				<span class="juliet-post-excerpt-border">
					<a href="<?php the_permalink();?>" class="excerpt-more-link">continue reading</a>
				</span>
			</div>

 			<!--Display Comment Count (Mobile)-->
			<div class="juliet-post-comment-count juliet-post-mobile-count">
				<a href="<?php the_permalink();?>">Comments <span class="juliet-post-bullet"><i class="fa fa-circle"></i></span><span>2</span>
				</a>				
			</div>
			<!--Display Share Buttons (optional)-->
			<div class="juliet-post-share-buttons">
				<a target="_blank" href="<?php the_permalink();?>"><i class="fa fa-facebook"></i></a>
				<a target="_blank" href="<?php the_permalink();?>"><i class="fa fa-twitter"></i></a>
				<a target="_blank" href="<?php the_permalink();?>"><i class="fa fa-pinterest-p"></i></a>
				<a target="_blank" href="<?php the_permalink();?>"><i class="fa fa-google-plus"></i>
				</a>
			</div>
		</div>
	</div>
</article>