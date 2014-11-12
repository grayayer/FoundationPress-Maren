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


<!--   // triggering the login modal window by inclduing #myModal in a url -->
<script>
document.addEventListener("DOMContentLoaded", function(event) {
   var id = window.location.hash.substring(1); // remove the #
   var element = document.querySelector('[data-reveal-id="' + id + '"]');

   element.click();
});
</script>

</body>
</html>
