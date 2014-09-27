<aside id="sidebar" class="small-12 large-3 large-offset-1 columns">
	<?php do_action('foundationPress_before_sidebar'); ?>
	<div class="large-12 medium-6 small-12 columns sidebar-columns first"><?php get_template_part('sidebar', 'ebook'); ?></div>
	<div class="large-12 medium-6 small-12 columns sidebar-columns last"><?php dynamic_sidebar("sidebar-widgets"); ?></div>
	<?php do_action('foundationPress_after_sidebar'); ?>
</aside>
