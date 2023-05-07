<?php
/**
 * * Template name: Home page
 */
get_header();
?>

<?php
wp_enqueue_style('slick-css', CSS_PATH . '/slick/slick.css','1.0.0', true);
wp_enqueue_script('slick-carousel',JS_PATH . '/slick/slick.min.js', ['jquery'], true);
//wp_enqueue_script('slick-carousel',JS_PATH . '/slick-1.8.1/slick/slick.js/slick.min.js', ['jquery'], true);
wp_enqueue_script('product',JS_PATH . '/slider-slick.js', ['jquery', 'slick-carousel'], '1.0.0',true);

?>

<?php
$heroSection = get_field('hero_section');
$heroTitle = $heroSection['title'];
$heroImg = $heroSection['title-img'];
$heroImgAdditional = $heroSection['title-img-additional'];
$heroSocial = get_field('social_panel');
$socialFb = $heroSocial['facebook'];
$socialInsta = $heroSocial['insta'];
$socialTwitt = $heroSocial['twitter'];
?>

<?php
$args = array(
	'theme_location' => 'primary_menu',
	'menu_id' => 'second',
	'container_class' => 'drop_menu',
	'container_aria_label' => 'custom',
//        'container'=> 'div',
);
wp_nav_menu($args);

?>

<?php
$menuBtn = get_field('button-main', 'options');
$arrivalsBtn = get_field('button_arrivals', 'options');
$linkBtn = get_field('link_button', 'options');
?>



<?php //the_content(); ?>
<main>
    <div class="background-wrapper">
        <div class="wrapper">
            <div class="hero-block">
                <div class="hero-title">
                    <h1 class="title"><?= $heroTitle ?></h1>
                    <div class="title-img-block">
                        <img class="additional-img" src="http://newwp/wp-content/uploads/2023/01/philippe.png">
                        <img class="title-img" src="http://newwp/wp-content/uploads/2023/01/img-2.png">
                    </div>
                </div>
                <div class="btn-panel">
                    <div class="social-panel">
                        <a href="<?= $socialFb['url'] ?>"><img src="<?= SVG_PATH ?>/fb.svg"></a>
                        <a href="<?= $socialInsta['url'] ?>"><img src="<?= SVG_PATH ?>/insta.svg"></a>
                        <a href="<?= $socialTwitt['url'] ?>"><img src="<?= SVG_PATH ?>/twitter.svg"></a>
                    </div>
                    <a class="social-link" href="<?= $linkBtn['url'] ?>"target="<?= $linkBtn['target'] ?>">Look colection <img class="social-svg" src="<?= SVG_PATH ?>/arrow.svg"></a>
                </div>
            </div>
<?php
$heroNewArrival = get_field('hero_new_arrivals');
$newArrivalTitle = $heroNewArrival['title_new_arrivals'];

?>
            <div class="arrivals-block">
                <div class="centered">
                    <div class="arrivals-carousel-block">
                        <div class="about-product">
                            <h1 class="title title-arrivals"><?= $newArrivalTitle ?></h1>
		                    <?= wp_nav_menu($args)?>
                        </div>
                            <div class="rings-carousel arrivals-carousel">
                             <div class="slider-wrapper">
<!--                                <div class="slider-item one"><img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/03/circlet-1.png">  </div>-->
<!--                                <div class="slider-item"><img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/03/circlet2-1.png"></div>-->
<!--                                <div class="slider-item"><img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/03/circlet3.png"> </div>-->
<!--                                <div class="slider-item one"><img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/03/circlet4.png"> </div>-->
<!---->
<!--                                <div class="slider-item one"><img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/02/rings12.png"></div>-->
<!--                                <div class="slider-item"><img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/02/rings11.png"></div>-->
<!--                                <div class="slider-item"> <img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/02/rings10.png"></div>-->
<!--                                <div class="slider-item one"><img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/02/rings9.png"></div>-->
<!---->
<!--                                <div class="slider-item one"><img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/02/rings8.png"></div>-->
<!--                                <div class="slider-item"><img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/02/rings7.png"></div>-->
<!--                                <div class="slider-item"><img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/02/rings6.png"></div>-->
<!--                                <div class="slider-item one"><img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/02/rings5.png"></div>-->
<!---->
<!--                                <div class="slider-item one"><img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/02/rings4.png"></div>-->
<!--                                <div class="slider-item"><img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/02/rings3.png"></div>-->
<!--                                <div class="slider-item"><img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/02/rings2.png"></div>-->
<!--                                <div class="slider-item one"><img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/02/rings1.png"></div>-->
                            </div>
                            </div>

                        <div class="btn-arrivals">
                            <a class="main-btn btn-border" href="<?= $arrivalsBtn['url'] ?>"target="<?= $arrivalsBtn['target'] ?>">View all arrivals</a>
                        </div>
                    </div>
                </div>
            </div>
<?php
$heroCollections = get_field('hero_collections');
$titleCollections = $heroCollections['title_collections'];
$imgPartCollections = $heroCollections['collection_img'];
?>
            <div class="collections-block">
                <div class="centered">
                    <div class="title-collections">
                        <h1 class="title"><?= $titleCollections ?></h1>
                    </div>
                    <div class="collection-img-block">
                        <div class="collection-img">
                            <img class="img-left" src="http://newwp/wp-content/uploads/2023/04/collections.png" alt="">
                            <a class="img-left-txt">Golden Glow</a>
                        </div>
                        <div class="collection-img center-img-part">
                            <img class="img-center" src="http://newwp/wp-content/uploads/2023/04/collections1.png" alt="">
                            <a class="img-center-txt"> Diamonds</a>
                            <img class="img-center2" src="http://newwp/wp-content/uploads/2023/04/collections2.png" alt="">
                            <a class="img-center2-txt">Fabulous Moments</a>
                        </div>
                        <div class="collection-img ">
                            <img class="img-right" src="http://newwp/wp-content/uploads/2023/04/collections3.png" alt="">
                            <a class="img-right-txt"> Color Theory</a>
                            <img class="img-right2" src="http://newwp/wp-content/uploads/2023/04/collections4.png" alt="">
                            <a class="img-right2-txt">Gentle Hugs</a>
                        </div>

                    </div>
                    <div class="btn-arrivals collection-btn">
                        <a class="main-btn btn-border" href="<?= $arrivalsBtn['url'] ?>"target="<?= $arrivalsBtn['target'] ?>">View all collections</a>
                    </div>
                </div>
            </div>
<?php
$heroFavorites = get_field('hero_favorites');
$titleFavorites = $heroFavorites['title_favorites'];
?>
            <div class="favorites-block">
                <div class="centered">
                    <div class="title-favorites-block">
                        <h1 class="title"><?= $titleFavorites ?></h1>
                    </div>

                    <div class="btn-arrivals favorites-btn">
                        <a class="main-btn btn-border" href="<?= $arrivalsBtn['url'] ?>"target="<?= $arrivalsBtn['target'] ?>">View all collections</a>
                    </div>
                </div>
            </div>
<?php
$heroPrice = get_field('hero_price');
//$imgPrice = $heroPrice['price_image'];
$titlePrice = $heroPrice['best_price_title'];
$txtPrice = $heroPrice['best_price'];
?>
            <div class="discount-block">
                <div class="centered">
                    <div class="holder-price">
                        <div class="img-part">
                            <img src="http://newwp/wp-content/uploads/2023/05/discount.png">
                        </div>
                        <div class="info-part">
                            <div class="sale-part">
                                <a><?= $titlePrice ?></a>
                            </div>
                            <div class="price-part">
                                <a><?= $txtPrice ?></a>
                            </div>
                            <div class="btn-arrivals discount-btn">
                                <a class="main-btn btn-border" href="<?= $arrivalsBtn['url'] ?>"target="<?= $arrivalsBtn['target'] ?>">Buy now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
$heroShowroom = get_field('hero_showroom');
$titleShowroom = $heroShowroom['showroom_title'];
$txtShowroom = $heroShowroom['txt_showroom'];
?>
            <div class="showroom-block">
                <div class="centered">
                    <div class="holder-price">
                        <div class="info-part showroom-part">
                            <div class="sale-part showroom-title">
                                <h1 class="title title2"><?= $titleShowroom ?></h1>
                            </div>
                            <div class="price-part txt-showroom-part">
                                <a class="txt-showroom"><?= $txtShowroom ?></a>
                            </div>
                            <a class="arrow-link showroom-link" href="<?= $linkBtn['url'] ?>" target="<?= $linkBtn['target'] ?>">Welcome back in-store <img class="arrow" src="<?= SVG_PATH ?>/arrow2.svg"></a>
                        </div>
                        <div class="img-part">
                            <img src="http://newwp/wp-content/uploads/2023/05/showroom.png">
                        </div>
                    </div>
                </div>
            </div>
<?php
$heroInstagram = get_field('insta_block');
$instaTitle = $heroInstagram ['insta_title'];
$instaSub = $heroInstagram ['insta_subtitle'];
$instLink = $heroInstagram ['insta_link'];
?>
            <div class="insta-block">
                <div class="centered">
                    <div class="insta-title">
                        <h1 class="title insta-title"><?= $instaTitle ?></h1>
                    </div>
                    <div class="link-group">
                        <div class="about-link">
                            <a><?= $instaSub ?></a>
                        </div>
                        <div class="insta-link"><a href="<?= $instLink['url'] ?>">anima_jewelry</a></div>
                    </div>
                    <div class="insta-carousel">
                        <div class="slider-wrapper">
                            <div class="item item-slider">
                                <img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/05/inastaimg1.png">
                            </div>
                            <div class="item item-slider">
                                <img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/05/inastaimg2.png">
                            </div>
                            <div class="item item-slider">
                                <img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/05/inastaimg3.png">
                            </div>
                            <div class="item item-slider">
                                <img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/05/inastaimg4.png">
                            </div>
                            <div class="item item-slider">
                                <img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/05/inastaimg1.png">
                            </div>
                            <div class="item item-slider">
                                <img class="slider-img" data-lazy="http://newwp/wp-content/uploads/2023/05/inastaimg2.png">
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <?php get_footer();?>
        </div>
    </div>
<!--    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
<!--    <script src="assets/js/lib/slick.min.js"></script>-->
<!--    <script src="assets/js/slider-slick.js"></script>-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!--    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</main>