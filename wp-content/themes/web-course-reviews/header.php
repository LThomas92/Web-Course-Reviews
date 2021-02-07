<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Web_Course_Reviews
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<title><?php
        bloginfo('name');
        if (wp_title('', false)) {
            echo '|';
        } else {
            echo bloginfo('description');
        } wp_title('');
        ?></title>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
	<a href="<?php echo site_url();?>"><img class="site-header__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Web Course Reviews Logo"></a>
	<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			); ?>	

<img class="search-icon" src="<?php echo get_template_directory_uri(); ?>/img/search.svg" alt="Search Icon">
<img class="close-icon" src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt="Close Icon">
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label>
      <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search!', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
  </label>
  <button type="submit" name="submit" value="submit"></button>
</form>

<img class="hamburger-menu" src="<?php echo get_template_directory_uri(); ?>/img/hamburger-menu.svg" alt="Hamburger Menu">

</header><!-- #masthead -->

<div class="mobile-navigation">
<div class="mobile-navigation__logo-container">
<a href="<?php echo site_url();?>"><img class="site-header__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Web Course Reviews Logo"></a>
<img class="close-icon" src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt="Close Icon">
</div> <!-- mobile nav logo container -->
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label>
      <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search!', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
  </label>
  <button type="submit" name="submit" value="submit"></button>
</form>
<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			); ?>	
</div>
