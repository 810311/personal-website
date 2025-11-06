<?php
/**
 * Template for displaying site header - displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my_wp_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sergiy Prygara - projects and blog about web development">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
<?php wp_body_open(); ?>

<!-- <div id="page" class="site"> -->
	
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'my-wp-theme' ); ?></a>

	<header id="masthead" class="l-site-header">
		<div class="site-branding">
			
      <?php
       
        if ( is_front_page() && is_home() ) :
				?>
				  <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			  else :
				?>
				  <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$my_wp_theme_description = get_bloginfo( 'description', 'display' );
			if ( $my_wp_theme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $my_wp_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="nav-header">

      <?php 
        if ( function_exists( 'the_custom_logo' ) ) {
          the_custom_logo();
        }
      ?>

      <input type="checkbox" id="menu-toggle" />

      <label for="menu-toggle" class="label-toggle"></label>

          
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'menu-1',
              'menu_id'        => 'primary-menu'
            )
          );
        ?>
          
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
