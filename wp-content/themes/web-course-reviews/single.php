<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Web_Course_Reviews
 */

get_header();
?>

	<main id="primary" class="site-main site-content">

		<?php
		while ( have_posts() ) :
			the_post(); 
			 $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); 
			$categories = get_the_category($post->ID);
			$tags = get_the_terms(get_the_ID(), 'post_tag');
			$date = get_the_date('F d, Y');
			$photoCredLink = get_field('photo_cred_link');
			$photoCredName = get_field('photo_cred');
			 ?>
		<header style="background-image: url('<?php echo $backgroundImg[0]?>')" class="page-header">
		</header>

		<div class="container-margins">
		<h1 class="single-post-title"><?php the_title();?></h1>
		<p class="single-post-photo-cred">Image by&nbsp;<span><a target="_blank" href="<?php echo $photoCredLink;?>"><?php echo $photoCredName;?></a></span><?php ?></p>
		<p class="single-post-date"><?php echo $date;?></p>
		<section class="single-post-content">
		<div class="page-content">
		<?php the_content(); ?>
		</div> <!-- page content -->

		<div class="single-post-content__sidebar">
		<div class="single-post-content__sidebar__meta">
		<h4>Course Rating</h4>

		<?php $rating = get_field( 'star_rating' );

	if ( $rating ) {
		$average_stars = round( $rating * 2 ) / 2;
	
		$drawn = 5;

		echo '<div class="star-rating">';
		
		// full stars.
		for ( $i = 0; $i < floor( $average_stars ); $i++ ) {
			$drawn--;
			echo '<svg aria-hidden="true" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/></svg>';
		}

		// half stars.
		if ( $rating - floor( $average_stars ) === 0.5 ) {
			$drawn--;
			echo '<svg aria-hidden="true" data-prefix="fas" data-icon="star-half-alt" class="svg-inline--fa fa-star-half-alt fa-w-17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 536 512"><path fill="currentColor" d="M508.55 171.51L362.18 150.2 296.77 17.81C290.89 5.98 279.42 0 267.95 0c-11.4 0-22.79 5.9-28.69 17.81l-65.43 132.38-146.38 21.29c-26.25 3.8-36.77 36.09-17.74 54.59l105.89 103-25.06 145.48C86.98 495.33 103.57 512 122.15 512c4.93 0 10-1.17 14.87-3.75l130.95-68.68 130.94 68.7c4.86 2.55 9.92 3.71 14.83 3.71 18.6 0 35.22-16.61 31.66-37.4l-25.03-145.49 105.91-102.98c19.04-18.5 8.52-50.8-17.73-54.6zm-121.74 123.2l-18.12 17.62 4.28 24.88 19.52 113.45-102.13-53.59-22.38-11.74.03-317.19 51.03 103.29 11.18 22.63 25.01 3.64 114.23 16.63-82.65 80.38z"/></svg>';
		}

		// empty stars.
		for ( $i = 0; $i < $drawn; $i++ ) {
			echo '<svg aria-hidden="true" data-prefix="far" data-icon="star" class="svg-inline--fa fa-star fa-w-18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"/></svg>';
		}

		echo '</div>';
	}
?>

</div> 
		
<div class="single-post-content__sidebar__meta">
		<h4>Categories</h4>
		<ul class="single-post-cats">
		<?php foreach($categories as $category) { ?>
			<a href="<?php echo get_category_link($category->term_id);?>">
			<li><?php echo $category->cat_name;?></li>
		</a>
	<?php } ?>
		</ul>

		</div>

		<div class="single-post-content__sidebar__meta">
		<h4>Tags</h4>
		<ul class="post-tags-list">
		<?php foreach($tags as $tag) { ?>
		<a href="<?php echo get_category_link($tag->term_id);?>">
		<li>#<?php echo $tag->name ;?></li>
		</a>
		<?php } ?>
		</ul>

		</div>

		<div class="single-post-content__sidebar__meta">
		<h4>Share This</h4>
		<ul class="single-post-share-links">
			<li>
			<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
		 <a title="Share this post on Twitter" target="_blank" href="http://twitter.com/share?url=<?php echo urlencode(get_permalink($post->ID)); ?>">
		 <img src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" alt="Twitter Icon"/>
		</a>
		</li>

		<li>
		<a href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink($post->ID)); ?>" title="Share this post on Facebook" target="_blank">
		<img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt="Facebook Icon"/>
		</a>
		</li>

		<li>
		<a target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink($post->ID)); ?>&media=<?php echo $pinterestimage[0]; ?>&description=<?php the_title(); ?>">
		<img src="<?php echo get_template_directory_uri(); ?>/img/pintrest.svg" alt="Pintrest Icon"/>
	</a>
		</li>
		</ul>

		</div> <!--meta -->

		</div> <!-- sidebar -->

	
		</section> <!-- single post content -->

		<h2 class="related-reviews-title"><span><img class="related-icon" src="<?php echo get_template_directory_uri(); ?>/img/related-icon.svg" alt="Related Icon"/></span>You might also like these:</h2>

		<?php $related = new WP_Query(
    	array(
        'category__in'   => wp_get_post_categories($post->ID),
        'posts_per_page' => 4,
        'post__not_in'   => array($post->ID )
    )
);

if($related->have_posts() ) { ?>
	<ul class="related-posts">
   <?php while($related->have_posts()) { 
        $related->the_post(); ?>
		<li>
			<figure>
				<a href="<?php echo the_permalink();?>">
				<?php the_post_thumbnail(); ?>
   </a>
		</figure>
		<a href="<?php echo the_permalink();?>"><h1><?php the_title();?></h1></a>
		</li>
   <?php }
    wp_reset_postdata();
} else { ?>
	<h1>There are no related reviews!</h1>
<?php } ?>

</ul>


		</div> <!-- container margins -->

		
		<?php endwhile; // End of the loop.?>

	</main><!-- #main -->

<?php
get_footer();
