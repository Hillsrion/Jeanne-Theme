<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
<link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/css/app.css">
</head>
<body <?php body_class(); ?>>
    <header class="row header">
        <div class="col-xs">
            <nav class="row main__nav">
                <ul class="col-xs main-nav__list">
                    <li class="main-nav__item"><a href="">À propos de moi</a></li>
                    <li class="main-nav__item"><a href="">Mes services</a></li>
                    <li class="main-nav__item"><a href="">Commissions</a></li>
                    <li class="main-nav__item"><a href="">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
