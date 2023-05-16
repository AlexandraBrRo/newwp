<?php
    get_template_part('inc/frontend/headers/global-header');
?>

<?php
$heroHeader = get_field( 'about_block', 'option' );
$logoAnima = $heroHeader['logo_site'];
?>

<header>
    <div class="wrapper">
        <div class="info-header">
            <div class="search-holder">
                <img class="dandruff" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/dandruff.svg">

                <input class="transparent" type="search" id="">
            </div>
            <img class="logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/logo.svg">
            <div class="account-panel">
                <div class="account-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/man.svg"">
                    <input type="text" id="" placeholder="My account">
                </div>
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/whishList.svg""></a>
                <div class="counter-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/bag.svg">
                    <input class="bag-counter" type="search" id="">
                </div>
            </div>
        </div>
    </div>
</header>

<?php wp_head(); ?>