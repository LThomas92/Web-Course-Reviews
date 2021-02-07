<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Web_Course_Reviews
 */

?>

	<footer id="colophon" class="site-footer">
	<div class="container-margins">
	<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'secondary-menu',
				)
			); ?>
			<div class="copyright-info">
			<p>&copy; Copyright 2020</p>
			</div> <!-- copyright info -->
	</div> <!-- container margins -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
