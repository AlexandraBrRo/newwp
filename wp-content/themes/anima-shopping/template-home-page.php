<?php
/**
 * * Template name: Home page
 */
get_header();
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<?php
wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/assets/css/slick/slick.css', '1.0.0', true );
wp_enqueue_style( 'owl-css', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css', '1.0.0', true );
wp_enqueue_script( 'slick-carousel', get_stylesheet_directory_uri() . '/assets/js/slick/slick.min.js', [ 'jquery' ], true );
wp_enqueue_script( 'owl-carousel', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', [ 'jquery' ], true );
wp_enqueue_script( 'product', get_stylesheet_directory_uri() . '/assets/js/slider-slick.js', [
	'jquery',
	'slick-carousel'
], '1.0.0', true );
wp_enqueue_script( 'product', get_stylesheet_directory_uri() . '/assets/js/slider-owl.js', [
	'jquery',
	'owl-carousel'
], '1.0.0', true );

?>

<?php
$heroSection       = get_field( 'hero_section' );
$heroTitle         = $heroSection['title'];
$heroImg           = $heroSection['title-img'];
$heroImgAdditional = $heroSection['title-img-additional'];
$heroSocial        = get_field( 'social_panel' );
$socialFb          = $heroSocial['facebook'];
$socialInsta       = $heroSocial['insta'];
$socialTwitt       = $heroSocial['twitter'];

?>

<?php
$args = array(
	'theme_location'       => 'primary_menu',
	'menu_id'              => 'second',
	'container_class'      => 'drop_menu',
	'container_aria_label' => 'custom',
//        'container'=> 'div',
);
wp_nav_menu( $args );

?>

<?php
$menuBtn     = get_field( 'button-main', 'options' );
$arrivalsBtn = get_field( 'button_arrivals', 'options' );
$linkBtn     = get_field( 'link_button', 'options' );
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
                        <a href="<?= $socialFb['url'] ?>"><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/fb.svg"></a>
                        <a href="<?= $socialInsta['url'] ?>"><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/insta.svg"></a>
                        <a href="<?= $socialTwitt['url'] ?>"><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/twitter.svg"></a>
                    </div>
                    <a class="social-link" href="<?= $linkBtn['url'] ?>" target="<?= $linkBtn['target'] ?>">Look
                        colection <img class="social-svg"
                                       src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/arrow.svg"></a>
                </div>
            </div>
			<?php
			$heroNewArrival  = get_field( 'hero_new_arrivals' );
			$newArrivalTitle = $heroNewArrival['title_new_arrivals'];
			?>
            <div class="arrivals-block">
                <div class="centered">
                    <div class="arrivals-carousel-block">
                        <div class="about-product">
                            <h1 class="title title-arrivals"><?= $newArrivalTitle ?></h1>
							<?= wp_nav_menu( $args ) ?>
                        </div>
	                    <?php
	                    $group = get_field( 'new_arriwals' );
	                    $check = $group['check'];
	                    ?>
                        <!-- New arrivals carousel -->
                        <div class="wrapper-carousel">
                            <div class="owl-carousel owl-theme">
		                        <?php
		                        foreach ( $check as $i ) {
			                        ?>
                                    <div class="item item-arriwals" data-dot="<button><?= $i['category_name']->name ?></button>">
				                        <?php
				                        $it = 1;
				                        foreach ( $i['product'] as $p ) {
					                        $image_url = get_the_post_thumbnail_url( $p->ID );
					                        ?>
                                            <a class="img-product img-product-<?= $it ?>" href=""><img src="<?= $image_url ?>"
                                                                                                       alt="<?= get_the_title( $p->ID ) ?>"></a>
					                        <?php
					                        $it++;
				                        }
				                        ?>
                                    </div>
			                        <?php
		                        }
		                        ?>
                            </div>
                        </div>
                        <div class="btn-arrivals">
                            <a class="main-btn btn-border" href="<?= $arrivalsBtn['url'] ?>"
                               target="<?= $arrivalsBtn['target'] ?>">View all arrivals</a>
                        </div>
                    </div>
                </div>
            </div>
			<?php
			$heroCollections    = get_field( 'hero_collections' );
			$titleCollections   = $heroCollections['title_collections'];
			$imgPartCollections = $heroCollections['collection_img'];
			?>
            <div class="collections-block">
                <div class="centered">
                    <div class="title-collections">
                        <h1 class="title"><?= $titleCollections ?></h1>
                    </div>
                    <div class="collection-img-block">
                        <div class="collection-img">
                            <a href=" http://newwp/strands/"><img class="img-left" src="http://newwp/wp-content/uploads/2023/04/collections.png" alt=""></a>
                            <a class="img-left-txt" href=" http://newwp/strands/">Golden Glow</a>
                        </div>
                        <div class="collection-img center-img-part">
                            <a href="http://newwp/shop/rings/"><img class="img-center" src="http://newwp/wp-content/uploads/2023/04/collections1.png" alt=""></a>
                            <a class="img-center-txt" href="http://newwp/shop/rings/">Diamonds</a>
                            <a href=" http://newwp/cuffs/"><img class="img-center2" src="http://newwp/wp-content/uploads/2023/04/collections2.png" alt=""></a>
                            <a class="img-center2-txt" href=" http://newwp/cuffs/">Fabulous Moments</a>
                        </div>
                        <div class="collection-img">
                            <a href="http://newwp/shop/rings/"><img class="img-right" src="http://newwp/wp-content/uploads/2023/04/collections3.png" alt=""></a>
                            <a class="img-right-txt" href="http://newwp/shop/rings/">Color Theory</a>
                            <a href=" http://newwp/earring"><img class="img-right2" src="http://newwp/wp-content/uploads/2023/04/collections4.png" alt=""></a>
                            <a class="img-right2-txt" href=" http://newwp/earring">Gentle Hugs</a>
                        </div>
                    </div>
<!--                    <div class="btn-arrivals collection-btn">-->
<!--                        <a class="main-btn btn-border" href="--><?//= $arrivalsBtn['url'] ?><!--"-->
<!--                           target="--><?//= $arrivalsBtn['target'] ?><!--">View all collections</a>-->
<!--                    </div>-->
                    <div class="btn-arrivals collection-btn">
                        <a class="main-btn btn-border" href="<?php echo get_post_type_archive_link('product'); ?>" target="<?php echo $arrivalsBtn['target']; ?>">View all collections</a>
                    </div>

                </div>
            </div>

            <?php
			$heroFavorites  = get_field( 'hero_favorites' );
			$titleFavorites = $heroFavorites['title_favorites'];
			?>
            <div class="favorites-block">
                <div class="centered">
                    <div class="title-favorites-block">
                        <h1 class="title"><?= $titleFavorites ?></h1>
                    </div>
                    <!-- New favorites carousel -->
                    <div class="wrapper-carousel">
                        <div id="owl-favorites" class="owl-carousel owl-theme" style="display: flex; flex-wrap: nowrap;">
			                <?php
			                foreach ($check as $i) {
				                ?>
                                <div class="item item-favorites">
					                <?php
					                $it = 1;
					                foreach ($i['product'] as $p) {
						                $image_url = get_the_post_thumbnail_url($p->ID);
						                $product_title = get_the_title($p->ID);
						                $product_price = get_post_meta($p->ID, 'product_price', true);
						                ?>
                                        <div class="product-item">
                                            <a href=""><img class="product-image" src="<?= $image_url ?>" alt="<?= $product_title ?>"></a>
                                            <h3 class="product-title"><?= $product_title ?></h3>
                                            <p class="product-price"><?= $product_price ?></p>
                                        </div>
						                <?php
						                $it++;
					                }
					                ?>
                                </div>
				                <?php
			                }
			                ?>
                        </div>
                    </div>
                    <div class="btn-arrivals favorites-btn">
                        <a class="main-btn btn-border" href="<?= $arrivalsBtn['url'] ?>"
                           target="<?= $arrivalsBtn['target'] ?>">View all collections</a>
                    </div>
                </div>
            </div>
			<?php
			$heroPrice = get_field( 'hero_price' );
			//$imgPrice = $heroPrice['price_image'];
			$titlePrice = $heroPrice['best_price_title'];
			$txtPrice   = $heroPrice['best_price'];
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
                                <a class="main-btn btn-border" href="<?= $arrivalsBtn['url'] ?>"
                                   target="<?= $arrivalsBtn['target'] ?>">Buy now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<?php
			$heroShowroom  = get_field( 'hero_showroom' );
			$titleShowroom = $heroShowroom['showroom_title'];
			$txtShowroom   = $heroShowroom['txt_showroom'];
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
                            <a class="arrow-link showroom-link" href="<?= $linkBtn['url'] ?>"
                               target="<?= $linkBtn['target'] ?>">Welcome back in-store <img class="arrow"
                                                                                             src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/arrow2.svg"></a>
                        </div>
                        <div class="img-part">
                            <img src="http://newwp/wp-content/uploads/2023/05/showroom.png">
                        </div>
                    </div>
                </div>
            </div>
			<?php get_template_part( 'template-insta-block' ); ?>

			<?php get_footer(); ?>

        </div>
    </div>

    <!--    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>-->
    <!--    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</main>



