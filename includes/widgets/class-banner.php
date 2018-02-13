<?php

namespace Pluginever\UEA\Widget;

use Elementor\Controls_Manager;
use Elementor\Widget_Base;

class Banner extends Widget_Base {
    public function get_name() {
        return 'ultimate-elementor-banner';
    }

    public function get_title() {
        return 'Banner';
    }

    public function get_icon() {
        return 'eicon-posts-grid';
    }

    public function get_categories() {
        return [ 'ultimate-elements' ];    // category of the widget
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'section_title',
            [
                'label' => __( 'Banner', 'ultimate-elementor' ),
            ]
        );

        $this->add_control(
            'banner_title',
            [
                'label'       => __( 'Title', 'your-plugin' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Banner Title', 'your-plugin' ),
                'placeholder' => __( 'Type your title text here', 'your-plugin' ),
            ]
        );

        $this->add_control(
            'border_style',
            [
                'label'   => __( "Tag", "ultimate_vc" ),
                'type'    => Controls_Manager::SELECT,
                'default' => 'Div',
                'options' => [
                    "Div"  => __( "Default", "ultimate_vc" ),
                    "h1"   => __( "H1", "ultimate_vc" ),
                    "h2"   => __( "H2", "ultimate_vc" ),
                    "h3"   => __( "H3", "ultimate_vc" ),
                    "h4"   => __( "H4", "ultimate_vc" ),
                    "h5"   => __( "H5", "ultimate_vc" ),
                    "h6"   => __( "H6", "ultimate_vc" ),
                    "p"    => __( "p", "ultimate_vc" ),
                    "span" => __( "span", "ultimate_vc" )
                ],
            ]
        );

        $this->add_control(
            'banner_desc',
            [
                'label'   => __( 'Description', 'your-plugin' ),
                'type'    => Controls_Manager::TEXTAREA,
                'default' => __( '', 'your-plugin' ),
                'description' => __("Text that comes on mouse hover.","ultimate_vc")
            ]
        );

    }

    protected function render() {
        $settings = $this->get_settings();

    }

    protected function _content_template(){
        ?>
        <#
        console.log(settings);
        console.log(settings);
        #>
        <div>
            test
        </div>

        <?php
    }
}
