<?php
/**
 * superthrift Theme Customizer
 *
 * @package superthrift
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function superthrift_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
  
  $wp_customize->add_section(
      'superthrift_settings',
      array(
          'title' => 'SuperThrift settings',
          'priority' => 35,
      )
  );

	$wp_customize->add_setting( 'intro_title' , array(
		'default'     => 'Intro message',
		'transport'   => 'postMessage',
	) );
	$wp_customize->add_setting( 'pickup_shortcode' , array(
		'default'     => '',
		'transport'   => 'postMessage',
	) );
	$wp_customize->add_setting( 'coupon_shortcode' , array(
		'default'     => '',
		'transport'   => 'postMessage',
	) );
	
	$wp_customize->add_control(
		'intro_title',
		array(
			'label' => 'Intro title',
			'section' => 'superthrift_settings',
			'type' => 'text',
		)
	);
	$wp_customize->add_control(
		'pickup_shortcode',
		array(
			'label' => 'Pickup Form Shortcode',
			'section' => 'superthrift_settings',
			'type' => 'text',
		)
	);
	$wp_customize->add_control(
		'coupon_shortcode',
		array(
			'label' => 'Coupon Form Shortcode',
			'section' => 'superthrift_settings',
			'type' => 'text',
		)
	);
}
add_action( 'customize_register', 'superthrift_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function superthrift_customize_preview_js() {
	wp_enqueue_script( 'superthrift_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'superthrift_customize_preview_js' );
