<?php
namespace Pluginever\PLVR_UEA;

class Scripts{

	/**
	 * Constructor for the class
	 *
	 * Sets up all the appropriate hooks and actions
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'load_assets') );
    }

   	/**
	 * Add all the assets required by the plugin
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function load_assets(){
		$suffix = ( defined( 'WP_DEBUG' ) && WP_DEBUG ) ? '' : '.min';
		wp_register_style('ultimate-elementor-addons', PLVR_UEA_ASSETS.'/css/ultimate-elementor-addons{$suffix}.css', [], date('i'));
		wp_register_script('ultimate-elementor-addons', PLVR_UEA_ASSETS.'/js/ultimate-elementor-addons{$suffix}.js', ['jquery'], date('i'), true);
		wp_localize_script('ultimate-elementor-addons', 'jsobject', ['ajaxurl' => admin_url( 'admin-ajax.php' )]);
		wp_enqueue_style('ultimate-elementor-addons');
		wp_enqueue_script('ultimate-elementor-addons');
	}

    

}