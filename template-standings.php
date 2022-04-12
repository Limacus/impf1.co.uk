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

<?php if (get_field('driver-' . $i . '__name')) : ?>
<?php the_field('driver-' . $i . '__name'); ?>
<?php endif; ?>
<?php the_field('driver-1__name'); ?>
<?php for ($i=1; $i<=20; $i++) : ?>
    <div 
        class="scoreboard-data-item hidden" 
        data-name="<?php if (get_field('driver-' . $i . '__name')) : ?><?php the_field('driver__' . $i . '-name'); ?><?php endif; ?>" 
        data-score="<?php if (get_field('driver-' . $i . '__score')) : ?><?php the_field('driver__' . $i . '-score'); ?><?php endif; ?>"
    >
    <?php echo $i ?>
    </div>
<?php endfor; ?>

<figure class="wp-block-table">
  <table>
    <tbody>
      <tr>
        <td>Position</td>
        <td>Name</td>
        <td>Points</td>
      </tr>
      <tr>
        <td class="position"><div class="position-box">1</div></td>
        <td class="driver-name">Mano Manikandan</td>
        <td class="points">0</td>
       </tr>
      <tr>
        <td class="position"><div class="position-box">2</div></td>
        <td class="driver-name">George Price</td>
        <td class="points">0</td>
       </tr>
      <tr>
        <td class="position"><div class="position-box">3</div></td>
        <td class="driver-name">Sef Numity</td>
        <td class="points">0</td>
      </tr>
      <tr>
        <td class="position"><div class="position-box">4</div></td>
        <td class="driver-name">Agatino Bivona</td>
        <td class="points">0</td>
      </tr>
      <tr>
        <td class="position"><div class="position-box">5</div></td>
        <td class="driver-name">Danny Optic</td>
        <td class="points">0</td>
      </tr>
      <tr>
        <td class="position"><div class="position-box">6</div></td>
        <td class="driver-name">Macak Macak</td>
        <td class="points">0</td>
      </tr>
      <tr>
        <td class="position"><div class="position-box">7</div></td>
        <td class="driver-name">Alex Mancinelli</td>
        <td class="points">0</td>
      </tr>
      <tr>
        <td class="position"><div class="position-box">8</div></td>
        <td class="driver-name">Nikola Voltic</td>
        <td class="points">0</td>
      </tr>
      <tr>
        <td class="position"><div class="position-box">9</div></td>
        <td class="driver-name">Salvatore Giovinazzi</td>
        <td class="points">0</td>
      </tr>
      <tr>
        <td class="position"><div class="position-box">10</div></td>
        <td>Rophan Folonie</td>
        <td class="points">0</td>
      </tr>
      <tr>
        <td class="position"><div class="position-box">11</div></td>
        <td class="driver-name">CJ Jemson</td>
        <td class="points">0</td>
      </tr>
      <tr>
        <td class="position"><div class="position-box">12</div></td>
        <td class="driver-name">Aroon Saetang</td>
        <td class="points">0</td>
      </tr>
      <tr>
        <td class="position"><div class="position-box">13</div></td>
        <td class="driver-name">Barron Blade</td>
        <td class="points">0</td>
      </tr>
      <tr>
        <td class="position"><div class="position-box">14</div></td>
        <td class="driver-name">John Rashford</td>
        <td class="points">0</td>
      </tr>
      <tr>
        <td class="position"><div class="position-box">15</div></td>
        <td class="driver-name">Ena Perèz</td>
        <td class="points">0</td>
      </tr>
      <tr>
        <td class="position"><div class="position-box">16</div></td>
        <td class="driver-name">Piotr Frost</td>
        <td class="points">0</td>
      </tr>
      <tr>
        <td class="position"><div class="position-box">17</div></td>
        <td class="driver-name">Linc Loyd</td>
        <td class="points">0</td>
      </tr>
      <tr>
        <td class="position"><div class="position-box">18</div></td>
        <td class="driver-name">James Fox</td>
        <td class="points">0</td>
      </tr>
      <tr>
        <td class="position"><div class="position-box">19</div></td>
        <td class="driver-name">Marcello Maltester</td>
        <td class="points">0</td>
      </tr>
      <tr>
        <td class="position"><div class="position-box">20</div></td>
        <td class="driver-name">Noa Tuomela</td>
        <td class="points">0</td>
      </tr>       
    </tbody>      
  </table>       
</figure>

  </main><!-- .site-main -->

<?php get_footer(); ?>