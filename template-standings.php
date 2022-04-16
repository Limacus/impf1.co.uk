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

        get_template_part('template-parts/standings/scoreboard');

      endwhile;
    ?>

  </main><!-- .site-main -->

<?php get_footer(); ?>