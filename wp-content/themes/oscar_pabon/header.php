<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Pagina Web Oficial de Oscar Pabón periodista y comunicador social comunitario de la ciudad de Villavicencio.">
    <meta name="keywords" content="comunicador social, periodismo, periodista, noticias, noticias de villavicencio, historico y cultural, medio ambiente villavicencio, otros autores, información al día, comunicación comunitaria, información villavicencio.">
    <meta name="author" content="Kildrax" />
    <meta name="copyright" content="Oscar Pabón" />
    <title>Oscar Pabón</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="container desktop__menu">
            <?php wp_nav_menu(array('theme_location' => 'primary_menu')); ?>
            <div class="header__info-container">
                <div class="header__info-container-social">
                    <a href="<?php echo get_option('fb_link'); ?>" target="_blank" class="header__info-container-social_network">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/facebook_grey_icon.png" class="header__info-container-social_network-img show f_icon" alt="Facebook">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/facebook_white.png" class="header__info-container-social_network-img f_icon" alt="Facebook">
                    </a>
                    <a href="<?php echo get_option('insta_link'); ?>" target="_blank" class="header__info-container-social_network">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/instagram_grey_icon.png" class="header__info-container-social_network-img grey show" alt="Instagram">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/instagram_white.png" class="header__info-container-social_network-img white" alt="Instagram">
                    </a>
                </div>
                <div class="header__info-container-logo">
                    <a href="<?php echo bloginfo('wpurl'); ?>">
                        <p>Oscar Pabón</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="mobile__menu">
            <div class="mobile__menu_structure">
                <input type="checkbox" id="menu-toggle" />
                <label id="trigger" for="menu-toggle"></label>
                <label id="burger" for="menu-toggle"></label>
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'primary_menu',
                        'menu_id'        => 'menu',
                        'container'      => "",
                    )
                ); ?>
            </div>
            <div class="mobile__menu_logo">
                <a href="<?php echo bloginfo('wpurl'); ?>">
                    <p>Oscar Pabón</p>
                </a>
                <a href="<?php echo get_option('fb_link'); ?>" target="_blank" class="header__info-container-social_network">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/facebook_grey_icon.png" class="header__info-container-social_network-img show f_icon" alt="Facebook">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/facebook_white.png" class="header__info-container-social_network-img f_icon" alt="Facebook">
                </a>
                <a href="<?php echo get_option('insta_link'); ?>" target="_blank" class="header__info-container-social_network">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/instagram_grey_icon.png" class="header__info-container-social_network-img grey show" alt="Instagram">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/instagram_white.png" class="header__info-container-social_network-img white" alt="Instagram">
                </a>
            </div>
    </header>