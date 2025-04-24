<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="contenedor barra-navegacion">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri() ; ?> /img/logo.svg" atl="logotivo de nuestra web" />

            </div> <!-- FIN LOGO DE NUESTRA WEB -->

            <?php   //LLAMADA Y LOCALIZACIÓN DE NUESTRO MENÚ 
                $args = array (
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );
                wp_nav_menu($args);
            ?>
        </div>
    </header>