<?php
$wp_customize->add_setting( 'bizz_ecommerce_disable_fea_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'bizz_ecommerce_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bizz_ecommerce_disable_fea_sec', array(
                'label'                 => esc_html__('Disable Section', 'bizz-ecommerce'),
                'type'                  => 'checkbox',
                'section'               => 'bizz_ecommerce_feature_banner_section',
                'settings'              => 'bizz_ecommerce_disable_fea_sec',
            ) ) );

// slider-layout-3
$wp_customize->add_setting('bizz_ecommerce_fea_adimg', array(
        'default' => TESTERWP_CUSTOMIZER_PLUGIN_URL .'bizz-ecommerce/assets/images/feature1.jpg',
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_upload',
    ));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'bizz_ecommerce_fea_adimg', array(
        'label'          => __('Image 1', 'bizz-ecommerce'),
        'section'        => 'bizz_ecommerce_feature_banner_section',
        'settings'       => 'bizz_ecommerce_fea_adimg',
 )));

$wp_customize->add_setting('bizz_ecommerce_fea_title', array(
        'default' => 'Woman Collection',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_text',
));
$wp_customize->add_control( 'bizz_ecommerce_fea_title', array(
        'label'    => __('Banner Title', 'bizz-ecommerce'),
        'section'  => 'bizz_ecommerce_feature_banner_section',
         'type'    => 'text',
));

$wp_customize->add_setting('bizz_ecommerce_fea_subtitle', array(
        'default' => 'Super Sale',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_text',
));
$wp_customize->add_control( 'bizz_ecommerce_fea_subtitle', array(
        'label'    => __('Banner Sub Title', 'bizz-ecommerce'),
        'section'  => 'bizz_ecommerce_feature_banner_section',
         'type'    => 'text',
));

$wp_customize->add_setting('bizz_ecommerce_fea_btntext', array(
        'default' =>'Shop Now',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_text',
));
$wp_customize->add_control( 'bizz_ecommerce_fea_btntext', array(
        'label'    => __('Banner Button Text', 'bizz-ecommerce'),
        'section'  => 'bizz_ecommerce_feature_banner_section',
         'type'    => 'text',
));

$wp_customize->add_setting('bizz_ecommerce_fea_url', array(
        'default' =>'#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_text',
));
$wp_customize->add_control( 'bizz_ecommerce_fea_url', array(
        'label'    => __('url', 'bizz-ecommerce'),
        'section'  => 'bizz_ecommerce_feature_banner_section',
         'type'    => 'url',
));

$wp_customize->add_setting('bizz_ecommerce_fea_adimg2', array(
        'default' => TESTERWP_CUSTOMIZER_PLUGIN_URL .'bizz-ecommerce/assets/images/feature2.jpg',
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_upload',
    ));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'bizz_ecommerce_fea_adimg2', array(
        'label'          => __('Image 2', 'bizz-ecommerce'),
        'section'        => 'bizz_ecommerce_feature_banner_section',
        'settings'       => 'bizz_ecommerce_fea_adimg2',
 )));

$wp_customize->add_setting('bizz_ecommerce_fea_title2', array(
        'default' => 'New Collection',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_text',
));
$wp_customize->add_control( 'bizz_ecommerce_fea_title2', array(
        'label'    => __('Banner Title', 'bizz-ecommerce'),
        'section'  => 'bizz_ecommerce_feature_banner_section',
         'type'    => 'text',
));

$wp_customize->add_setting('bizz_ecommerce_fea_subtitle2', array(
        'default' => 'Super Sale',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_text',
));
$wp_customize->add_control( 'bizz_ecommerce_fea_subtitle2', array(
        'label'    => __('Banner Sub Title', 'bizz-ecommerce'),
        'section'  => 'bizz_ecommerce_feature_banner_section',
         'type'    => 'text',
));

$wp_customize->add_setting('bizz_ecommerce_fea_btntext2', array(
        'default' => 'Shop Now',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_text',
));
$wp_customize->add_control( 'bizz_ecommerce_fea_btntext2', array(
        'label'    => __('Banner Button Text', 'bizz-ecommerce'),
        'section'  => 'bizz_ecommerce_feature_banner_section',
         'type'    => 'text',
));

$wp_customize->add_setting('bizz_ecommerce_fea_url2', array(
        'default' =>'#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_text',
));
$wp_customize->add_control( 'bizz_ecommerce_fea_url2', array(
        'label'    => __('url', 'bizz-ecommerce'),
        'section'  => 'bizz_ecommerce_feature_banner_section',
         'type'    => 'url',
));

$wp_customize->add_setting('bizz_ecommerce_fea_adimg3', array(
        'default' => TESTERWP_CUSTOMIZER_PLUGIN_URL .'bizz-ecommerce/assets/images/feature1.jpg',
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_upload',
    ));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'bizz_ecommerce_fea_adimg3', array(
        'label'          => __('Image 3', 'bizz-ecommerce'),
        'section'        => 'bizz_ecommerce_feature_banner_section',
        'settings'       => 'bizz_ecommerce_fea_adimg3',
 )));

$wp_customize->add_setting('bizz_ecommerce_fea_title3', array(
        'default' => 'New Collection',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_text',
));
$wp_customize->add_control( 'bizz_ecommerce_fea_title3', array(
        'label'    => __('Banner Title', 'bizz-ecommerce'),
        'section'  => 'bizz_ecommerce_feature_banner_section',
         'type'    => 'text',
));

$wp_customize->add_setting('bizz_ecommerce_fea_subtitle3', array(
        'default' => 'Super Sale',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_text',
));
$wp_customize->add_control( 'bizz_ecommerce_fea_subtitle3', array(
        'label'    => __('Banner Sub Title', 'bizz-ecommerce'),
        'section'  => 'bizz_ecommerce_feature_banner_section',
         'type'    => 'text',
));

$wp_customize->add_setting('bizz_ecommerce_fea_btntext3', array(
        'default' =>'Shop Now',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_text',
));
$wp_customize->add_control( 'bizz_ecommerce_fea_btntext3', array(
        'label'    => __('Banner Button Text', 'bizz-ecommerce'),
        'section'  => 'bizz_ecommerce_feature_banner_section',
         'type'    => 'text',
));

$wp_customize->add_setting('bizz_ecommerce_fea_url3', array(
        'default' =>'#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'bizz_ecommerce_sanitize_text',
));
$wp_customize->add_control( 'bizz_ecommerce_fea_url3', array(
        'label'    => __('url', 'bizz-ecommerce'),
        'section'  => 'bizz_ecommerce_feature_banner_section',
         'type'    => 'url',
));