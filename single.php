<?php get_header(); ?>
<div class="row">
	<div class="small-12 large-8 columns" role="main">

	<?php do_action('foundationPress_before_content'); ?>

	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php FoundationPress_entry_meta(); ?>
			</header>
			<?php do_action('foundationPress_post_before_entry_content'); ?>
			<div class="entry-content">

			<?php if ( has_post_thumbnail() ): ?>
				<?php if (has_post_thumbnail( $post->ID )) { //Only post a module if there's a featured image ?>
					<div class="post_thumbnail">
						<?php the_post_thumbnail(medium); ?>
					</div>
			<?php } else { ?><!--this is what's used when there isn't a featured image -->
				<!-- 				<a href="<?php the_permalink(); ?>">
									<div class="post_thumbnail">
										<img src="<?php // echo get_stylesheet_directory_uri();?>/images/thumbnail_placeholder.jpg" width="100%" height="auto" >
									</div>
								</a> -->
						<?php } ?>
			<?php endif; ?>

			<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action('foundationPress_post_before_comments'); ?>
			<?php comments_template(); ?>
			<?php do_action('foundationPress_post_after_comments'); ?>
		</article>
	<?php endwhile;?>

	<?php do_action('foundationPress_after_content'); ?>

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
