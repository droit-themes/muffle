<?php
defined( 'ABSPATH' ) || exit;

/**
 * Plugin installation and activation for WordPress themes
 */
class muffle_Register_Plugins {

	public function __construct() {
		add_filter( 'insight_core_tgm_plugins', [ $this, 'register_required_plugins' ] );

		//add_filter( 'insight_core_compatible_plugins', [ $this, 'register_compatible_plugins' ] );
	}

	public function register_required_plugins( $plugins ) {
		/*
		 * Array of plugin arrays. Required keys are name and slug.
		 * If the source is NOT from the .org repo, then source is also required.
		 */
		$new_plugins = array(
			array(
				'name'      => esc_html__( 'Elementor', 'muffle' ),
				'slug'      => 'elementor',
				'required'  => true,
			),
	
			array(
				'name'               => esc_html__( 'Droit Addons For Elementor', 'muffle' ),
				'slug'               => 'droit-elementor-addons',
				'required'           => true,
			),
	
			array(
				'name'               => esc_html__( 'Droit Dark Mode', 'muffle' ),
				'slug'               => 'droit-dark-mode',
				'required'           => true,
			),
			
			array(
				'name'               => esc_html__( 'Muffle Core', 'muffle' ), // The plugin name.
				'slug'               => 'muffle-core', // The plugin slug (typically the folder name).
				'source'             => 'http://muffle.droitlab.com/downloadfile/muffle-core_1.0.3.zip', // The plugin source.
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
	
			array(
				'name'               => esc_html__( 'Redux Framework', 'muffle' ),
				'slug'               => 'redux-framework',
				'required'           => true,
			),
	
			array(
				'name'               => esc_html__( 'Contact Form 7', 'muffle' ),
				'slug'               => 'contact-form-7',
				'required'           => true,
			),
	
			array(
				'name'               => esc_html__( 'Advanced Custom Fields', 'muffle' ),
				'slug'               => 'advanced-custom-fields',
				'required'           => true,
			),
	
			array(
				'name'      => esc_html__( 'One Click Demo Import', 'muffle' ),
				'slug'      => 'one-click-demo-import',
				'required'  => false,
			),
	
			array(
				'name'      => esc_html__( 'WooCommerce', 'muffle' ),
				'slug'      => 'woocommerce',
				'required'  => false,
			),
	
			array(
				'name'      => esc_html__( 'Bookly - Online Booking and Scheduling', 'muffle' ),
				'slug'      => 'bookly-responsive-appointment-booking-tool',
				'required'  => false,
			),
		);

		return array_merge( $plugins, $new_plugins );
	}
}

new muffle_Register_Plugins();
