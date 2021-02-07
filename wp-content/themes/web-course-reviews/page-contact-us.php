<?php get_header(); 
$desc = get_field('contact_us_description');
?>

<section class="contact-us">
<div class="contact-us__title-container">
<h1 class="contact-us__title"><?php the_title();?></h1>
<p class="contact-us__desc"><?php echo $desc;?></p>
</div>

<div class="contact-us__content">
<?php the_content();?>
</div> <!-- about us content -->

</section> <!-- about us -->



<?php get_footer(); ?>