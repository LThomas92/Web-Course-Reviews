<?php get_header(); ?>

<section class="about-us">
<div class="about-us__content-container">
<h1><?php the_title();?></h1>
<div class="about-us__text-container">
<?php the_content(); ?>
</div>
</div> <!-- about us content container -->

<figure class="about-us__image-container">
<?php the_post_thumbnail();?>
</figure> <!-- about us image container -->
</section>


<?php get_footer(); ?>