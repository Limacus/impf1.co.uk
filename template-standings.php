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

<?php for ($i=1; $i<=20; $i++) : ?>
    <div 
        class="scoreboard-data-item hidden" 
        data-name="<?php if (get_field('driver-' . $i . '__name')) : ?><?php the_field('driver-' . $i . '__name'); ?><?php endif; ?>" 
        data-score="<?php if (get_field('driver-' . $i . '__score')) : ?><?php the_field('driver-' . $i . '__score'); ?><?php endif; ?>"
    >
    </div>
<?php endfor; ?>

  </main><!-- .site-main -->

<?php get_footer(); ?>