<?php
namespace Pluginever\UEA\Core;

use Elementor\Plugin;

class Elements{
    public function __construct() {
        add_action('elementor/init', [$this, 'add_category']);
        add_action('elementor/widgets/widgets_registered', [$this, 'init_elements']);
    }

    /**
     * Adds the category on the editor
     * @since 1.0.0
     */
    public function add_category(){
        Plugin::$instance->elements_manager->add_category(
            'ultimate-elements',
            [
                'title' => __( 'Ultimate Elementor Addons', 'ultimate-elementor' ),
                'icon' => 'fa fa-plug', //default icon
            ],
            1 // position
        );
    }

    public function init_elements(){
        $elements = [
            'Pluginever\UEA\Widget\Banner',
        ];



        foreach ( $elements as $element){
            Plugin::instance()->widgets_manager->register_widget_type(new $element);
        }

    }


}
