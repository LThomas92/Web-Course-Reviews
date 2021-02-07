<?php
/**
 * The template for displaying Category pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="container-margins">
	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

			<header class="archive-header-cat">
				<h1 class="archive-title">
				<?php
				/* translators: %s: Category title. */
				printf( __( 'Category | %s', 'twentyfourteen' ), single_cat_title( '', false ) );
				?>
				</h1>

				<?php
					// Show an optional term description.
					$term_description = term_description();
				if ( ! empty( $term_description ) ) :
					printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .archive-header -->
                
            <article class="category-archive">
                <?php $i = 0;
                while (have_posts()): the_post(); 
                if($i == 0 || $i == 5 || $i == 6) {  ?>
                    <div class="category-big-block">
                    <a href="<?php echo the_permalink();?>">
                    <figure>
                        <?php the_post_thumbnail(); ?>
                    </figure>
                    </a>
                    <a href="<?php echo the_permalink();?>"><h1><?php the_title();?></h1></a>
                    </div> <!-- category big block -->

              <?php  } else { ?>
                <div class="category-small-block">
                
                <a href="<?php echo the_permalink();?>">
                    <figure>
                        <?php the_post_thumbnail(); ?>
                    </figure>
              </a>
              <a href="<?php echo the_permalink();?>"><h1><?php the_title();?></h1></a>
                </div> <!-- cat small block -->
            <?php   } 
            $i++;
                  endwhile; ?>

                  </article>
		
				<?php else : ?>
                
                    <div class="category-no-results">
                    <h1>We found nothing in this category!</h1>
                    <a class="btn" href="<?php echo site_url();?>">Back to Home</a>
                </div>  <!-- category no results -->

				<?php endif; ?>
		</div><!-- #content -->
    </section><!-- #primary -->
    
    </div> <!-- container margins -->

<?php get_footer();