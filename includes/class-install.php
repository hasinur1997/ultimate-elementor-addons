<?php
namespace Pluginever\PLVR_UEA;

class Install{

	/**
	 * Constructor for the class ultimate-elementor-addons
	 *
	 * Sets up all the appropriate hooks and actions
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function __construct() {
		register_activation_hook( PLVR_UEA_FILE, array( $this, 'activate' ) );
		register_deactivation_hook( PLVR_UEA_FILE, array( $this, 'deactivate' ) );

    }

    /**
	 * Executes during plugin activation
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function activate() {
		

	}

	/**
	 * Executes during plugin deactivation
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function deactivate() {

	}

    

}