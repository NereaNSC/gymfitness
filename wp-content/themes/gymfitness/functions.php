<?php
    // FUNCIÓN PARA AÑADIR MENÚS A NUESTRA WEB
    function gymfitness_menus() {
        register_nav_menus(array(
            'menu-principal' => __('Menú Principal', 'gymfitness'),
            'menu-secundario' => __('Menú Secundario', 'gymfitness'),
            'menu-footer' => __('Menú Footer', 'gymfitness')
        ));
    }

    add_action('init', 'gymfitness_menus');

    
    // FUNCIÓN PARA AGREGAR NUESTRA HOJA DE ESTILOS
    function gymfitness_scripts_styles() {
        wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
        wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
    }

    add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');

    // FUNCIÓN PARA AÑADIR IMAGENES DESTACADAS + TITULOS SEO EN NUESTRAS PÁGINAS
    function gymfitness_setup() {
        // IMAGENES DESTACADAS
        add_theme_support('post-thumbnails');
        // TITULOS PARA SEO
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme', 'gymfitness_setup');
    
?>