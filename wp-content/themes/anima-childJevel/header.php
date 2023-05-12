<?php get_template_part('inc/frontend/headers/global-header');

?>


<header>
    <div class="wrapper">
        <div class="info-header">
            <div class="search-holder">
                <img class="dandruff" src="<?= SVG_PATH ?>/dandruff.svg">
                <input class="transparent" type="search" id="">
            </div>
            <img class="logo-img" src="<?= SVG_PATH ?>/logo.svg" alt="logo">
            <div class="account-panel">
                <div class="account-item">
                    <img src="<?= SVG_PATH ?>/man.svg">
                    <input type="text" id="" placeholder="My account">
                </div>
                <a href="#"><img src="<?= SVG_PATH ?>/whishList.svg"></a>
                <div class="counter-item">
                    <img src="<?= SVG_PATH ?>/bag.svg">
                    <input class="bag-counter" type="search" id="">
                </div>
            </div>
        </div>
    </div>
</header>

<?php wp_head(); ?>