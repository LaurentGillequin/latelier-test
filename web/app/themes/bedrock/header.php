<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= get_bloginfo( 'description' ); ?>">
    <meta name="author" content="Laurent Gillequin">

    <?php wp_head(); ?>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" <?php body_class(); ?>>

<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?php the_field('logo'); ?>" alt="Logo" width="131" height="56" class="d-inline-block align-text-top" id="logo">
                <img src="<?php the_field('logo_scroll'); ?>" alt="Logo" width="131" height="56" class="d-none align-text-top" id="logo-scrolled">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBed" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

            <?php
            wp_nav_menu( array(
                'theme_location'  => 'primary',
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'navbarBed',
                'menu_class'      => 'navbar-nav ms-auto mb-2 mb-lg-0',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ) );
            ?>
        </div>
    </nav>
</header>