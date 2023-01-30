<div class="footer">
    <div class="row">
        <div class="col-3">
            <h3>Menu</h3>
            <?php
                wp_nav_menu( array(
                    'theme_location'  => 'primary',
                    'container'       => 'ul',
                    'container_class' => 'menu_footer'
                ) );
            ?>
        </div>
        <div class="col-3">
            <h3>Adresse</h3>
            <?php the_field('adresse'); ?>
        </div>
        <div class="col text-end"><img src="<?php the_field('logo_footer'); ?>"></div>
    </div>
</div>
<div class="socket">
    <div class="row copyright">
        <div class="col-12"><p><?php the_field('copyright'); ?></p></div>
    </div>
</div>