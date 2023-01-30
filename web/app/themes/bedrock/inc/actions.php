<?php
function register_acf_block_types() {
        /* Services Block */
        acf_register_block_type( array(
            'name'              => 'services',
            'title'             => 'Services',
            'description'       => "Liste de services",
            'render_template'   => 'inc/acf-blocks/services.php',
            'category'          => 'common',
            'icon'              => 'editor-ol',
            'keywords'          => array(),
            'enqueue_assets'    => function() {
                wp_enqueue_style(
                    'blockscustomcss',
                    get_template_directory_uri() . '/assets/css/blocks.css'
                );
            }
        ) );

        /* Search Block */
        acf_register_block_type( array(
            'name'              => 'searchblock',
            'title'             => 'Formulaire de recherche',
            'description'       => "Recherche depuis un fichier JSON",
            'render_template'   => 'inc/acf-blocks/search-form.php',
            'category'          => 'widgets',
            'icon'              => 'search',
            'keywords'          => array(),
            'enqueue_assets'    => function() {
                wp_enqueue_style( 
                    'blockscustomcss', 
                    get_template_directory_uri() . '/assets/css/blocks.css' 
                );
            }
        ) );

        /* Partners Block */
        acf_register_block_type( array(
            'name'              => 'partnersblock',
            'title'             => 'Slider partenaires',
            'description'       => "Slider de logo partenaires",
            'render_template'   => 'inc/acf-blocks/partners.php',
            'category'          => 'media',
            'icon'              => 'networking',
            'keywords'          => array(),
            'enqueue_assets'    => function() {
                wp_enqueue_style( 
                    'blockscustomcss', 
                    get_template_directory_uri() . '/assets/css/blocks.css' 
                );
            }
        ) );

        /* Footer Block */
        acf_register_block_type( array(
            'name'              => 'footerblock',
            'title'             => 'Block Footer',
            'description'       => "Footer du site",
            'render_template'   => 'inc/acf-blocks/footer-block.php',
            'category'          => 'common',
            'icon'              => 'privacy',
            'keywords'          => array(),
            'enqueue_assets'    => function() {
                wp_enqueue_style( 
                    'blockscustomcss', 
                    get_template_directory_uri() . '/assets/css/blocks.css' 
                );
            }
        ) );
}

add_action( 'acf/init', 'register_acf_block_types' );