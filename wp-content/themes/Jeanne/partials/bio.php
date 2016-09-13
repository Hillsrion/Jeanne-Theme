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