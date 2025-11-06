<?php
/**
 * Template for displaying single posts from custom post type *'portfolio' /inc/portfolio.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package my_wp_theme
 */

get_header();
?>

	<main class="view l-constrained">
  
    <?php
      the_content();
        
        the_post_navigation (
              
            array (
                'prev_text' => 
                '<span>' . esc_html__( 'previous:', 'my-wp-theme' ) . '</span> <span>%title</span>',

                'next_text' => '<span>' . esc_html__( 'next:', 'my-wp-theme' ) . '</span> <span>%title</span>',
                
                )
          );
    ?>

  </main><!-- #main -->

<?php
get_sidebar();
get_footer();
