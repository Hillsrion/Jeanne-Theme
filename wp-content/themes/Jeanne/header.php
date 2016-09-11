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
    <header class="header header--absolute">
        <nav class="main__nav">
            <ul class="row end-xs main-nav__list">
                <li class="main-nav__item"><a href="">À propos de moi</a></li>
                <li class="main-nav__item"><a href="">Mes services</a></li>
                <li class="main-nav__item"><a href="">Commissions</a></li>
                <li class="main-nav__item"><a href="">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="row front-cover" style="background-image: url('<?php echo the_post_thumbnail_url() ?>')">
        <h2 class="front-cover__name">Jeanne Plounevez</h2>
        <h3 class="front-cover__job">Dessinatrice Freelance</h3>
    </div>
    <?php } ?>
