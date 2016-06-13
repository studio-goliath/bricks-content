<?php
/**
 * Plugin Name: Bricks basic templates
 * Description: Building a theme with pre-defined bricks using WordPress Fields API
 * Version: 1.0
 * Author: Studio Goliath
 * Author URI: http://www.studio-goliath.com/
 */

/**
 * Add bricks basic templates
 *
 * @param $layouts
 * @return array
 */
function bricks_basic_add_templates( $layouts )
{

    return array_merge($layouts,
        array(
            array(
                'key' => '575ad2ec55824',
                'name' => 'full-width-text',
                'label' => 'Full width text',
                'display' => 'row',
                'sub_fields' => array(
                    array(
                        'key' => 'field_575ad30f0ae07',
                        'label' => 'Content',
                        'name' => 'content',
                        'type' => 'wysiwyg',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'tabs' => 'all',
                        'toolbar' => 'full',
                        'media_upload' => 1,
                    ),
                ),
                'min' => '',
                'max' => '',
            ),
            array(
                'key' => '575e5e924cafa',
                'name' => 'two-columns',
                'label' => 'Two columns',
                'display' => 'row',
                'sub_fields' => array(
                    array(
                        'key' => 'field_575e5eaf4cafb',
                        'label' => 'Column left',
                        'name' => 'column_left',
                        'type' => 'wysiwyg',
                        'instructions' => '',
                        'required' => '',
                        'conditional_logic' => '',
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'tabs' => 'all',
                        'toolbar' => 'full',
                        'media_upload' => 1,
                    ),
                    array(
                        'key' => 'field_575e5ed14cafc',
                        'label' => 'Column right',
                        'name' => 'column_right',
                        'type' => 'wysiwyg',
                        'instructions' => '',
                        'required' => '',
                        'conditional_logic' => '',
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'tabs' => 'all',
                        'toolbar' => 'full',
                        'media_upload' => 1,
                    ),
                ),
                'min' => '',
                'max' => '',
            ),
        )
    );

}
add_filter( 'layouts_filter', 'bricks_basic_add_templates' );

/**
 * Display each brick related to brick-basic-templates plugin
 *
 * @param $part
 * @param $layout
 * @return string
 */
function display_basic_template( $part, $layout ) {

    $template = plugin_dir_path( __FILE__ ) . "/parts/row-$layout.php";

    // Get template part

    if ( is_file($template) ) {

        ob_start();
        load_template( $template, false );
        $part = ob_get_contents();
        ob_end_clean();

    }

    // Css

    $css_file_path = plugin_dir_path( __FILE__ ) . "css/$layout.min.css";

    if ( is_file($css_file_path) ) {

        $css_file_url = plugin_dir_url( __FILE__ ) . "css/$layout.min.css";

        if ( !wp_style_is( "brick-$layout", $list = 'enqueued' ) ) {
            wp_register_style( "brick-$layout", $css_file_url );
            wp_enqueue_style( "brick-$layout" );
        }

    }


    // Js

    $js_file_path = plugin_dir_path( __FILE__ ) . "js/$layout.js.css";

    if ( is_file(  $js_file_path ) ) {

        $js_file_url = plugin_dir_url(__FILE__) . "js/$layout.js.css";

        if ( !wp_script_is( "brick-$layout", $list = 'enqueued' ) ) {
            wp_register_script( "brick-$layout", $js_file_url );
            wp_enqueue_script( "brick-$layout" );
        }

    }

    // Return template part

    return $part;

}
add_filter( 'brick_template_two-columns', 'display_basic_template' , 10, 2 );
add_filter( 'brick_template_full-width-text', 'display_basic_template' , 10, 2 );
