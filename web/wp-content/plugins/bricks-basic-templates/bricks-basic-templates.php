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
            array (
                'key' => '576909fc7f3d8',
                'name' => 'three-columns-featured-image',
                'label' => 'Three columns with featured image',
                'display' => 'row',
                'sub_fields' => array (
                    array (
                        'key' => 'field_57690a567f3d9',
                        'label' => 'First column image',
                        'name' => 'first_column_image',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => '',
                        'conditional_logic' => '',
                        'wrapper' => array (
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
                    array (
                        'key' => 'field_57690ab47f3da',
                        'label' => 'First column title',
                        'name' => 'first_column_title',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => '',
                        'conditional_logic' => '',
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                        'readonly' => 0,
                        'disabled' => 0,
                    ),
                    array (
                        'key' => 'field_57690acf7f3db',
                        'label' => 'First_column_content',
                        'name' => 'first_column_content',
                        'type' => 'textarea',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'maxlength' => '',
                        'rows' => '',
                        'new_lines' => 'wpautop',
                        'readonly' => 0,
                        'disabled' => 0,
                    ),
                    array (
                        'key' => 'field_57690c960a64b',
                        'label' => 'First column link',
                        'name' => 'first_column_link',
                        'type' => 'url',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                    ),
                    array (
                        'key' => 'field_57690ae37f3dc',
                        'label' => 'Second column image',
                        'name' => 'second_column_image',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => '',
                        'conditional_logic' => '',
                        'wrapper' => array (
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
                    array (
                        'key' => 'field_57690af67f3dd',
                        'label' => 'Second column title',
                        'name' => 'second_column_title',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => '',
                        'conditional_logic' => '',
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                        'readonly' => 0,
                        'disabled' => 0,
                    ),
                    array (
                        'key' => 'field_57690b097f3de',
                        'label' => 'Second column content',
                        'name' => 'second_column_content',
                        'type' => 'textarea',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'maxlength' => '',
                        'rows' => '',
                        'new_lines' => 'wpautop',
                        'readonly' => 0,
                        'disabled' => 0,
                    ),
                    array (
                        'key' => 'field_57690ccb0a64c',
                        'label' => 'Second column link',
                        'name' => 'second_column_link',
                        'type' => 'url',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                    ),
                    array (
                        'key' => 'field_57690b157f3df',
                        'label' => 'Third column image',
                        'name' => 'third_column_image',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => '',
                        'conditional_logic' => '',
                        'wrapper' => array (
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
                    array (
                        'key' => 'field_57690b2a7f3e0',
                        'label' => 'Third column title',
                        'name' => 'third_column_title',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => '',
                        'conditional_logic' => '',
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                        'readonly' => 0,
                        'disabled' => 0,
                    ),
                    array (
                        'key' => 'field_57690b367f3e1',
                        'label' => 'Third column content',
                        'name' => 'third_column_content',
                        'type' => 'textarea',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'maxlength' => '',
                        'rows' => '',
                        'new_lines' => 'wpautop',
                        'readonly' => 0,
                        'disabled' => 0,
                    ),
                    array (
                        'key' => 'field_57690cda0a64d',
                        'label' => 'Third column link',
                        'name' => 'third_column_link',
                        'type' => 'url',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => '',
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
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
 * Bricks image templates styles
 *
 * @param $scripts
 * @return array
 */
function bricks_basic_add_styles( $scripts )
{
    $plugin_dir_url = plugins_url('bricks-basic-templates');

    return array_merge($scripts,
        array(
            'full-width-text' => array(
                'brick-full-width-text' => $plugin_dir_url . '/css/full-width-text.min.css'
            ),
            'three-columns-featured-image' => array(
                'brick-three-columns-featured-image' => $plugin_dir_url . '/css/three-columns-featured-image.min.css'
            ),
            'two-columns' => array(
                'brick-two-columns' => $plugin_dir_url . '/css/two-columns.min.css'
            )
        )
    );
}
add_filter( 'bricks_styles_filter', 'bricks_basic_add_styles' );

/**
 * Display each brick related to brick-basic-templates plugin
 *
 * @param $part
 * @param $layout
 * @return string
 */
function bricks_display_basic_template( $part, $layout ) {

    // Get template part
    $template = bricks_get_template_part( 'bricks-basic-templates' , $layout );

    if ( is_file($template) ) {

        ob_start();
        load_template( $template, false );
        $part = ob_get_contents();
        ob_end_clean();

    }

    // Return template part
    return $part;

}
add_filter( 'brick_template_two-columns', 'bricks_display_basic_template' , 10, 2 );
add_filter( 'brick_template_three-columns-featured-image', 'bricks_display_basic_template' , 10, 2 );
add_filter( 'brick_template_full-width-text', 'bricks_display_basic_template' , 10, 2 );