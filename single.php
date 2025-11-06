<?php
/**
 * Template for displaying single blog posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package my_wp_theme
 */

get_header();
?>

  <main class="l-constrained">
    
    <?php while ( have_posts() ) : the_post();?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <header>
          <h1><?php the_title(); ?></h1>
          </header>  
        
          
              <?php the_content(); ?>
        
          <footer>
           <div class="dt"><?php echo get_the_date();?></div>
              <?php my_wp_theme_entry_footer(); ?>
          </footer>
    
      </article>	
        
    <?php endwhile;?>

	</main>

<?php
get_sidebar();
get_footer();
