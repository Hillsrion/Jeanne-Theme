<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
    <div class="row bio">
        <div class="col-md-6 col-xs-12 bio__left-col">
            <h2 class="bio__title">À propos de moi</h2>
            <div class="bio__desc">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content() ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
        <div class="col-md-6 col-xs-12 bio__image">
            <img src="none" alt="">
        </div>
    </div>
    <main class="row main" role="main">
<!--        This partial contains the wp query for the 'dessins' post_type.-->
        <?php get_template_part('partials/portfolio-loop'); ?>
    </main>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>