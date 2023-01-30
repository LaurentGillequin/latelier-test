<div class="container">
    <p style="text-align:center;"><?php the_field('sous-titre'); ?></p>
    <h2 style="text-align:center;"><?php the_field('titre'); ?></h2>
    <div class="partners">
        <?php
        if( have_rows('partenaires') ):
            while( have_rows('partenaires') ) : the_row();
                echo '<div><img src="'.get_sub_field('partenaire').'" class="partners-img"></div>';
            endwhile;
        endif;
        ?>
        <?php
        if( is_admin() ): ?>
            <div class="partners">
                <em>Indiquez vos partenaires dans la colonne de droite.</em>
            </div>
        <?php endif; ?>
    </div>
</div>