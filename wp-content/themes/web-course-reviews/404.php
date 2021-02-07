<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Web_Course_Reviews
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<div class="page-content">
			<img alt="404 image" class="" src="<?php echo get_template_directory_uri(); ?>/img/404-image.png">
			<h1>The page you are looking for cannot be found!</h1>
			<a class="btn" href="<?php echo site_url();?>">Back to Home</a>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
