<?php
/**
 * Plugin Name: Bricks basic templates
 * Description: Building a theme with pre-defined bricks using WordPress Fields API
 * Version: 1.0
 * Author: Studio Goliath
 * Author URI: http://www.studio-goliath.com/
 */

function add_templates()
{

    return $layouts = array(
        array(
            'key' => '575ad2ec55824',
            'name' => 'full_width_text',
            'label' => 'Full width text',
            'display' => 'row',
            'sub_fields' => array(
                array(
                    'key' => 'field_575ad30f0ae07',
                    'label' => 'Text',
                    'name' => 'text',
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
            'name' => 'two_columns',
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
    );

}
add_filter( 'layouts_filter', 'add_templates' );