<?php
/**
 * Template for displaying about page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package my_wp_theme
 */

get_header();
?>

	<main class="l-constrained">

  	<?php if ( have_posts() ) :
            while ( have_posts() ) : the_post(); 
    ?>

     <article class="l-about">
        <?php the_content();?>

      </article>

		<?php endwhile;
          endif;
    ?>

	</main>

<?php
get_sidebar();
get_footer();
