<?php
/**
 * Template for displaying contact page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package my_wp_theme
 */

get_header();
?>

	<main id="primary" class="l-constrained">
    
   
        
          <?php the_content();?>

		
  </main><!-- #main -->

  
<?php
get_sidebar();
get_footer();
