<?php
/**
 * Template for displaying site footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my_wp_theme
 */

?>

	<footer id="colophon" class="l-site-footer">

      <?php 
          wp_nav_menu (
          array (
            'theme_location' => 'social',
            'container'      => 'false',
            'menu_class'     => 'social',
            'link_before'    => '<span class="screen-reader-text">',
            'link_after'     => '</span>'  
            
            )
          );
      ?>


	        <p>This site is hosted by <a href="https://www.bluehost.com" target="_blank">Bluehost </a></p>
  
  </footer><!-- #colophon -->

<!--</div> #page -->

<?php wp_footer(); ?>



</body>
</html>
