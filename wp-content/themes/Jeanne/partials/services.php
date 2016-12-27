<?php $imagesPath = '/wp-content/themes/jeanne/images/'  ?>
<section class="row center-xs services">
    <div class="col-md-10 col-xs-12 services__list">
        <div class="row max-size">
            <?php for ($i = 0; $i <3 ;$i++) {
                $isEven = $i%2!==0 ? 'end-xs' : '';
                ?>
            <div class="col-xs service">
                <div class="row between-xs">
                    <div class="col-sm-5 col-xs-12 service__image">
                        <img src="<?php echo $imagesPath?>cover__form.jpg" alt="">
                    </div>
                    <div class="col-sm-6 col-xs-12 service__wrapper">
                        <div class="row <?php echo $isEven ?>">
                            <div class="col-sm-10 col-xs-12">
                                <h2 class=" service__title">Dessin aquarelle</h2>
                                <div class="service__description">
                                    <p>I love caramels toffee. Gingerbread jelly-o tart I love. Lemon drops muffin powder cotton candy. Marzipan chocolate bar powder.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }; ?>
        </div>
    </div>
</section>
