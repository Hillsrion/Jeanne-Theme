<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
<link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/css/app.css">
</head>
<body <?php body_class(); ?>>
    <?php if(is_front_page()) { ?>
    <div class="menu-toggler">
        <div class="hamburger">
            <span class="hamburger__item hamburger__item--top"></span>
            <span class="hamburger__item hamburger__item--center"></span>
            <span class="hamburger__item hamburger__item--bottom"></span>
        </div>
        <div class="menu-toggler__label" data-preview="Ouvrir le menu" data-opened="Fermer le menu">
            <span>Menu</span>
        </div>
    </div>
    <div class="row middle-xs nav-menu">
        <nav class="nav-menu__main">
            <ul class="row nav-menu__list">
                <li class="nav-menu__item">
                    <a class="link" href="">
                        <span class="link__initial">À propos de moi</span>
                        <span class="link__overlay">
                            <span class="link__mask">À propos de moi</span>
                        </span>
                    </a>
                </li>
                <li class="nav-menu__item">
                    <a class="link" href="">
                        <span class="link__initial">Mes services</span>
                        <span class="link__overlay">
                            <span class="link__mask">Mes services</span>
                        </span>
                    </a>
                </li>
                <li class="nav-menu__item">
                    <a class="link" href="">
                        <span class="link__initial">Commissions</span>
                        <span class="link__overlay">
                            <span class="link__mask">Commissions</span>
                        </span>
                    </a>
                </li>
                <li class="nav-menu__item">
                    <a class="link" href="">
                        <span class="link__initial">Boutique</span>
                        <span class="link__overlay">
                            <span class="link__mask">Boutique</span>
                        </span>
                    </a>
                </li>
                <li class="nav-menu__item">
                    <a class="link" href="">
                        <span class="link__initial">Contact</span>
                        <span class="link__overlay">
                            <span class="link__mask">Contact</span>
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="nav-menu__socials">
            <nav class="socials-nav">
                <ul class="socials-nav__list">
                    <li class="socials-nav__item"></li>
                    <li class="socials-nav__item"></li>
                    <li class="socials-nav__item"></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- <div class="loading-page"></div> -->
    <div class="global-container">
        <div class="global-container__wrapper">
            <div class="global-container__overlay"></div>
            <div class="front-cover" style="background-image: url('<?php echo the_post_thumbnail_url() ?>')">
                <h2 class="front-cover__name">Jeanne Plounevez</h2>
                <h3 class="front-cover__job">Dessinatrice Freelance</h3>
            </div>
    <?php } ?>
