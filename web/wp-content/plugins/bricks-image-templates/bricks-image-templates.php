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
                'name' => 'full_width_image',
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