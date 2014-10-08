</section>
<footer class="bottom_footer">
	<footer class="row">
		<?php do_action('foundationPress_before_footer'); ?>
		<?php dynamic_sidebar("footer-widgets-first"); ?>
		<article class="medium-5 large-4 columns middle "><?php dynamic_sidebar("footer-widgets-middle"); ?></article>
		<?php dynamic_sidebar("footer-widgets-last"); ?>				
		<?php do_action('foundationPress_after_footer'); ?>
	</footer>
</footer>
<a class="exit-off-canvas"></a>

	<?php do_action('foundationPress_layout_end'); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49263210-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
