<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Web_Course_Reviews
 */

get_header();
$featured_articles = get_field('featured_article');
?>
    <div class="container-margins">
	<main id="primary" class="site-main site-main-front-page">
	<section class="featured-article-section">
    <?php if( $featured_articles): ?>
    <ul>
    <?php foreach($featured_articles as $featured_article ): 
            $title = get_the_title($featured_article->ID);
            $image = get_the_post_thumbnail_url($featured_article->ID);
            $link = get_permalink($featured_article->ID);
            $desc = $featured_article->post_content;
            $date = get_the_date( 'M d Y', $featured_article->ID );
            $cat = get_the_category($featured_article->ID);
            $catName = $cat[0]->cat_name;
        ?>
       
        <li style="background-image:url(<?php echo $image;?>)" class="featured-article">
        <div class="image-overlay"></div>
        <div class="featured-article__text">
        <a href="<?php echo $link; ?>"><h1><?php echo $title; ?></h1></a>
        <p class="featured-article__desc"><?php echo wp_trim_words($desc, 15);?></p>
        <div class="featured-article__meta">
        <span><?php echo $catName; ?></span>|
        <span><?php echo $date;?></span>
        </div> <!-- featured article meta -->
        </div> <!-- featured article text -->
        </li> <!-- featured article -->
       
    <?php endforeach; ?>
    </ul>
    <?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
<?php endif; ?>
    </section>
    
    
   
    <section class="two-up-block">
    <?php $featuredPostSmalls= get_field('featured_article_small');
	if($featuredPostSmalls): ?>
    <ul>
    <?php foreach( $featuredPostSmalls as $featuredPostSmall ): 
           $title = get_the_title($featuredPostSmall->ID);
           $featured_img_url = get_the_post_thumbnail_url($featuredPostSmall->ID);
           $date = get_the_date('M d Y', $featuredPostSmall->ID );
           $cat = get_the_category($featuredPostSmall->ID);
           $catName = $cat[0]->cat_name;
           $link = get_permalink($featuredPostSmall->ID);
           $author = get_the_author($featuredPostSmall->ID);
           $content = $featuredPostSmall->post_content;
           $tags = get_the_tags($featuredPostSmall->ID);
        ?>
    <li class="two-up-block__single">
    <a class="two-up-block__single__cat" href=""><?php echo $catName;?></a>
        <a href="<?php echo $link; ?>">
        <figure>
         <img src="<?php echo $featured_img_url;?>" alt=""/>
        </figure>
        </a>
       <div class="two-up-block__single__text">
       <a href="<?php echo $link; ?>">
       <h1><?php echo $title;?></h1>
    </a>
        <p class="two-up-block__single__excerpt"><?php echo wp_trim_words($content, 20);?></p>
       <div class="two-up-block__single__meta">
    <ul class="two-up-block__single__tags">
    <?php $i = 0;
    foreach($tags as $tag):  ?>
        <li>#<?php echo $tag->name;?></li>
        <?php $i++; 
        if($i == 3) 
        break;
        ?>
            <?php endforeach; ?>
    </li>
    </ul>
       <p class="two-up-block__single__meta__date"><?php echo $date;?></p>
       </div> <!-- meta -->

    <?php endforeach; ?>
    </div> <!-- two up block text -->
    </li> <!-- featured post big -->

    </div> <!-- two up block single -->

    </ul>
<?php endif; ?>
    </section>




	</main><!-- #main -->

    </div> <!-- container margins -->

<?php
get_footer();
