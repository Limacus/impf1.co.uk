<?php
    /**
     * Component: Scoreboard
     * 
     * Styles: /css/components/scoreboard.css
     * Scripts: /js/components/scoreboard.js
     * Template: /template-parts/standings/scoreboard.php
     */
?>
<?php for ($i=1; $i<=20; $i++) : ?>
    <div 
        class="scoreboard-data-item hidden" 
        data-name="<?php if (get_field('driver-' . $i . '__name')) : ?><?php the_field('driver-' . $i . '__name'); ?><?php endif; ?>" 
        data-score="<?php if (get_field('driver-' . $i . '__score')) : ?><?php the_field('driver-' . $i . '__score'); ?><?php endif; ?>"
    >
    </div>
<?php endfor; ?>