

<?php 

/**
 * Template for displaying all posts from custom post type 'portfolio' /inc/portfolio.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#home-page-display
 *
 * @package my_wp_theme
 */

get_header(); ?>

  
    <?php
    $portfolio_args  = array(
        'post_type'         => 'portfolio',
        'post_status'       => 'publish',
        'posts_per_page'    => -1
    );
    $portfolio_query = new WP_Query( $portfolio_args );
    if( $portfolio_query->have_posts() ) : ?>
    
    <main class="work">
        
        <?php while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post(); ?>
          <div>    
                <a href="<?php echo get_permalink( $post->ID ); ?>">
                <?php echo get_the_post_thumbnail( $post->ID ); ?> 
               </a>

          </div>
        <?php endwhile; ?>
        
    </main>
    
    <?php endif; wp_reset_postdata();?>

<?php get_footer(); ?>
</div> 




