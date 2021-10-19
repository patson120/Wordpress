<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <nav class="menu-principal navbar navbar-expand-lg navbar-light bg-light w-100">
        <a class="navbar-brand font-weight-bold" href=" <?= home_url('/') ?>"><?php bloginfo('name'); ?> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse py-1" id="navbarSupportedContent">
            <?php wp_nav_menu([
                'theme_location' => 'header',
                'container' => 'false',
                'menu_class' => 'navbar-nav mr-auto',
            ]); ?>
            <?php get_search_form(); ?>
        </div>
    </nav>

    