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
        <div class="menu-toggler__label" data-opened="Fermer le menu">
            <span>Menu</span>
        </div>
    </div>
    <?php get_template_part('partials/main-menu') ?>
    <?php get_template_part('partials/loading-animation') ?>
    <div class="global-container">
        <div class="global-container__wrapper">
            <div class="global-container__overlay"></div>
            <main class="row landing">
                <div class="col-xs-5 row middle-xs center-xs landing__intro">
                    <h1>
                        <div class="name name--pre">
                            <span class="name__wrapper"><span class="name__item">J</span></span>
                            <span class="name__wrapper"><span class="name__item">e</span></span>
                            <span class="name__wrapper"><span class="name__item">a</span></span>
                            <span class="name__wrapper"><span class="name__item">n</span></span>
                            <span class="name__wrapper"><span class="name__item">n</span></span>
                            <span class="name__wrapper"><span class="name__item">e</span></span>
                        </div>
                        <div class="name name--last">
                            <span class="name__wrapper"><span class="name__item">P</span></span>
                            <span class="name__wrapper"><span class="name__item">l</span></span>
                            <span class="name__wrapper"><span class="name__item">o</span></span>
                            <span class="name__wrapper"><span class="name__item">u</span></span>
                            <span class="name__wrapper"><span class="name__item">n</span></span>
                            <span class="name__wrapper"><span class="name__item">e</span></span>
                            <span class="name__wrapper"><span class="name__item">v</span></span>
                            <span class="name__wrapper"><span class="name__item">e</span></span>
                            <span class="name__wrapper"><span class="name__item">z</span></span>
                        </div>
                    </h1>
                    <h2>Dessinatrice</h2>
                    <div class="landing__scroll-picto">
                        <span>Scroll</span>
                    </div>
                </div>
                <div class="col-xs-7 landing__cover landing__cover--hidden" style="background-image: url('<?php echo the_post_thumbnail_url() ?>')">
                    <div class="mask"></div>
                </div>
            </main>
    <?php } ?>
