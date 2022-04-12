<?php
  /**
  * Template Name: Standings
  */
?>
<?php get_header(); ?>

  <main id="primary" class="site-main">

    <?php
      while ( have_posts() ) :
                
        the_post();

      endwhile;
    ?>

  </main><!-- .site-main -->

<?php get_footer(); ?>