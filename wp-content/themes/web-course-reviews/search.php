<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Web_Course_Reviews
 */

get_header();
?>

	<div class="container-margins">
	<main id="primary" class="site-main">
		<?php if ( have_posts() ) : ?>

			<header class="search-header">
				<h1 class="page-title">
				<?php $allsearch = new WP_Query("s=$s&showposts=-1"); ?>
					<?php echo $allsearch->found_posts; ?> <?php printf( esc_html__('Search Results | %s', 'web-course-reviews' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header> <!-- .page-header -->

			<ul class="search-results-container">
			<?php $i = 0; while (have_posts() ) : the_post(); 
				if($i == 0 || $i == 3) { ?>
					<li class="search-results-container__single__big">
					<div class="search-results-container__single__big__text">
					<h1><?php the_title();?></h1>
					<p><?php echo wp_trim_words(get_the_content(), 15)?></p>
					</div> <!-- search results single text -->
					<figure>
					<a href="<?php echo the_permalink();?>">
						<?php the_post_thumbnail(); ?>
						</a>
					</figure>
					</li> <!-- search results single big -->
				<?php } else { ?>
					<li class="search-results-container__single__small">
					<figure>
					<a href="<?php echo the_permalink();?>">
						<?php the_post_thumbnail(); ?>
						</a>
					</figure>
					<div class="search-results-container__single__small__text">
					<a href="<?php echo the_permalink();?>">
					<h1><?php the_title();?></h1>
					</a>
					<p><?php echo wp_trim_words(get_the_content(), 15)?></p>
					</div> <!-- search results single text -->
					</li> <!-- search results single small -->
					<?php } ?>
			<?php 
			$i++;
			endwhile; ?>
			</ul> <!-- search results container -->
		
		<?php else : ?>

			<div class="category-no-results">
			<h1>We found nothing with your search term, try again!</h1>
			<a class="btn" href="<?php echo site_url();?>">Back to Home</a>
		</div>  <!-- category no results -->

		<?php endif;?>




	</main><!-- #main -->

	</div> <!-- container margins -->



<?php
get_footer();
