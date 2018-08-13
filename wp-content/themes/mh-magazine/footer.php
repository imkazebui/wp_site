<?php $mh_magazine_options = mh_magazine_theme_options(); ?>
<?php mh_before_footer(); ?>
<?php if (is_active_sidebar('mh-footer-1') || is_active_sidebar('mh-footer-2') || is_active_sidebar('mh-footer-3') || is_active_sidebar('mh-footer-4')) { ?>
<footer class="mh-footer">
	<div class="mh-container mh-container-inner mh-footer-widgets mh-row clearfix">
		<?php if (is_active_sidebar('mh-footer-1')) { ?>
			<div class="mh-col-1-4 mh-widget-col-1 mh-footer-area mh-footer-1">
				<?php dynamic_sidebar('mh-footer-1'); ?>
			</div>
		<?php } ?>
		<?php if (is_active_sidebar('mh-footer-2')) { ?>
			<div class="mh-col-1-4 mh-widget-col-1 mh-footer-area mh-footer-2">
				<?php dynamic_sidebar('mh-footer-2'); ?>
			</div>
		<?php } ?>
		<?php if (is_active_sidebar('mh-footer-3')) { ?>
			<div class="mh-col-1-4 mh-widget-col-1 mh-footer-area mh-footer-3">
				<?php dynamic_sidebar('mh-footer-3'); ?>
			</div>
		<?php } ?>
		<?php if (is_active_sidebar('mh-footer-4')) { ?>
			<div class="mh-col-1-4 mh-widget-col-1 mh-footer-area mh-footer-4">
				<?php dynamic_sidebar('mh-footer-4'); ?>
			</div>
		<?php } ?>
	</div>
</footer>
<?php } ?>
<?php if (has_nav_menu('mh_footer_nav')) { ?>
	<div class="mh-footer-mobile-nav"></div>
	<nav class="mh-footer-nav">
		<div class="mh-container mh-container-inner clearfix">
			<?php wp_nav_menu(array('theme_location' => 'mh_footer_nav', 'fallback_cb' => '')); ?>
		</div>
	</nav>
<?php } ?>
<div class="mh-copyright-wrap">
	<div class="mh-container mh-container-inner clearfix">
		<p class="mh-copyright"><?php echo empty($mh_magazine_options['copyright']) ? 'Copyright &copy; ' . date("Y") . ' | MH Magazine WordPress Theme by <a href="' . esc_url('http://www.mhthemes.com/') . '" title="Premium WordPress Themes" rel="nofollow">MH Themes</a>' : $mh_magazine_options['copyright']; ?></p>
	</div>
</div>
<?php mh_after_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>