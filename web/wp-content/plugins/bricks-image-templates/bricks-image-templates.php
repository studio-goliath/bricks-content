<?php
/**
 * Plugin Name: Bricks image templates
 * Description: Building a theme with pre-defined bricks using WordPress Fields API
 * Version: 1.0
 * Author: Studio Goliath
 * Author URI: http://www.studio-goliath.com/
 */

/**
 * Add bricks image templates
 * 
 * @param $layouts
 * @return array
 */
function bricks_image_add_templates( $layouts )
{

    return array_merge($layouts,
        array(
            array(
                'key' => '575e642a75784',
                'name' => 'full-width-image',
                'label' => 'Full width image',
                'display' => 'row',
                'sub_fields' => array(
                    array(
                        'key' => 'field_575e643a75785',
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => '',
                        'conditional_logic' => '',
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'array',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                        'min_width' => '',
                        'min_height' => '',
                        'min_size' => '',
                        'max_width' => '',
                        'max_height' => '',
                        'max_size' => '',
                        'mime_types' => '',
                    ),
                ),
                'min' => '',
                'max' => '',
            ),
        )
    );

}
add_filter( 'layouts_filter', 'bricks_image_add_templates' );

/**
 * Display each brick related to brick-image-templates plugin
 *
 * @param $part
 * @param $layout
 * @return string
 */
function bricks_display_image_template( $part, $layout ) {

    // Get template part
    $template = bricks_get_template_part( 'bricks-image-templates' , $layout );

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
add_filter( 'brick_template_full-width-image', 'bricks_display_image_template' , 10, 2 );