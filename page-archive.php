<?php
/*
 * Template for displaying archive page
 * https://wordpress.stackexchange.com/questions/144570/output-yearly-archive-within-a-page
 *
 */

get_header();
?>

	<main id="primary" class="l-constrained l-archive">


  <h1>Archive</h1>

  <?php 
        $posts = new WP_Query (
              array (
                'post_type'=>'post', 
                'post_status'=>'publish', 
                'posts_per_page'=>-1
                )
              ); 
 
        if ( $posts->have_posts() ) : ?>
 
    
      <ul>
        <?php while ( $posts->have_posts() ) : $posts->the_post(); 
              $year = get_the_time('Y');

                if ($posts->current_post === 0) 

                  printf( '<li><h2>%s</h2>', $year ); //open <li> 
              
                elseif ($last_year !== $year)
                  printf( '</li><li><h2>%s</h2>', $year ); //close previous <li>, open next <li>
        ?>
      
     
          <div>
              <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
              <div class="dt"><?php the_time( ' d M Y' ) ?></div>
          </div>


               
         
        <?php

            if ( ( $posts->current_post + 1 ) === $posts->post_count )
            echo '</li>'; // Always close <li> at the end of the loop
            $last_year = $year;
            endwhile;
            
        ?></ul>
 
    <?php endif ?>
    <!-- end of the loop -->


    
 </main><!-- #main -->

<?php
get_sidebar();
get_footer();
