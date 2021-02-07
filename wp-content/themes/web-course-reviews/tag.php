<?php
/**
 * The template for displaying Tag pages
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
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

            <header class="archive-header">
                <h1 class="archive-title"><?php printf( __( '#%s', 'web-course-reviews' ), single_tag_title( '', false ) ); ?></h1>
            </header><!-- .archive-header -->

         
        

            <section class="tag-main-content">
            <?php $i = 0; 
            while (have_posts() ) : the_post();
            if($i == 0 || $i == 3 || $i == 6) { ?>
            <div class= "big-tag-block">
            <figure>
                <a href="<?php echo the_permalink();?>">
                <?php the_post_thumbnail();?>
                </a>
            </figure>
            <div class="big-tag-block__text">
            <a href="<?php echo the_permalink();?>"><h1><?php the_title();?></h1></a>
            <p><?php echo wp_trim_words(get_the_content(), 25)?></p>
            </div> <!-- big tag block text -->
            </div> <!-- big tag block -->
           <?php } else { ?>
               <div class="small-tag-block">
               <figure>
               <a href="<?php echo the_permalink();?>">
                <?php the_post_thumbnail();?>
           </a>
            </figure>
            <div class="small-tag-block__text">
            <a href="<?php echo the_permalink();?>"><h1><?php the_title();?></h1></a>
            <p><?php echo wp_trim_words(get_the_content(), 10)?></p>
            </div> <!-- small tag block text -->

               </div> <!-- small tag block -->
         <?php   }
        $i++;
            endwhile; ?>
            </section> 

        <?php 

        else : ?>
                        
                        <div class="category-no-results">
                    <h1>We found nothing with this tag!</h1>
                    <a class="btn" href="<?php echo site_url();?>">Back to Home</a>
                </div>  <!-- category no results -->
                   
            <?php endif;
            ?>
        </div><!-- #content -->
    </section><!-- #primary -->

    </div>


<?php
get_footer();