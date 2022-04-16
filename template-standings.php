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
No because if you think about it on a low level, all I gave you was files. The templates aren't using them yet.
We're isolating the scoreboard into it's own files, so it's temporarily been "broken"
It's this, that kicks us off in the right direction:
get_template_part('template-parts/standings/scoreboard');
you'll see that in the middle of the template file above that I sent
for comparison, this is one of the templates in my NEH project:
<?php
/**
 * Template Name: How it Works
 */
?>
<?php get_header(); ?>

  <main id="primary" class="site-main">

  <?php
    while ( have_posts() ) :
                
      the_post();

      get_template_part( 'template-parts/global/masthead' );
      get_template_part( 'template-parts/how-it-works/secondary-navigation' );
      get_template_part( 'template-parts/how-it-works/history' );
      get_template_part( 'template-parts/how-it-works/technical-specs' );
      get_template_part( 'template-parts/how-it-works/features' );
      get_template_part( 'template-parts/how-it-works/diagram' );
      get_template_part( 'template-parts/how-it-works/faqs' );

    endwhile;
  ?>

  </main><!-- .site-main -->

<?php get_footer(); ?>