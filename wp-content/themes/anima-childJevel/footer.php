<?php get_template_part( 'inc/frontend/footers/global-footer', '', ( ! empty( $args ) ) ? $args : [] );
?>

<?php
$heroFooter = get_field( 'contact_block', 'option' );
$emailLink  = $heroFooter['email'];

$socialNameFoot   = $heroFooter['social_group_name'];
$socialInstaFoot = $heroFooter['footer_instagram'];
$socialFbFoot   = $heroFooter['footer_facebook'];
$socialTwittFoot = $heroFooter['footer_twitter'];

$addressTitle = $heroFooter['address_title'];
$address      = $heroFooter['address'];

$phoneTitle   = $heroFooter['phone_title'];
$numberPhone  = $heroFooter['phone_number'];


?>

<footer>
    <div class="wrapper">
        <div class="footer-centered">
            <div class="email-block">
                <a class="shade txt-style">Contact us</a>
                <a class="light email-style" href="<?= $emailLink['url'] ?>"><h1><?= $emailLink ?></h1></a>
            </div>
            <div class="info-holder">
                <div class="social-block">
                    <div class="title-social"><a class="shade point"><?= $socialNameFoot ?></a></div>
                    <div class="social-name">
                        <a class="light letter" href="<?= $socialInstaFoot['url'] ?>">Instagram</a>
                        <a class="light letter" href="<?= $socialFbFoot['url'] ?>">Facebook</a>
                        <a class="light letter" href="<?= $socialTwittFoot['url'] ?>">Twitter</a>
                    </div>
                </div>
                <div class="address-block">
                    <div class="title-address"><a class="shade point"><?= $addressTitle ?></a></div>
                    <div class="address-part">
                        <a class="light address-link letter" href="https://maps.google.com/maps?q=<?= $address ?>">
                            <?= $address ?>
                        </a>
                    </div>
                </div>
                <div class="phone-block">
                    <div class="title-phone"><a class="shade point"><?= $phoneTitle ?></a></div>
                    <div class="phone-part">
                        <a class="light phone-link letter" href="<?= $numberPhone ?>">+<?= $numberPhone ?></a>
                    </div>
                </div>
            </div>
            <div class="line-block">
<!--                <div class="logo-txt"></div>-->
                <a class="shade logo-txt">Anima Jeewlry &copy 2021 </a>
                <div class="line"></div>
            </div>

        </div>
    </div>
</footer>

<?php wp_footer(); ?>

