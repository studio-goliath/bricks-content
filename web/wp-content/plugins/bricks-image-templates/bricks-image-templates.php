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
            array (
                'key' => '5769401e0eee5',
                'name' => 'slider',
                'label' => 'Slider',
                'display' => 'row',
                'sub_fields' => array (
                    array (
                        'key' => 'field_576940240eee6',
                        'label' => 'Images',
                        'name' => 'images',
                        'type' => 'gallery',
                        'instructions' => '',
                        'required' => '',
                        'conditional_logic' => '',
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'min' => '',
                        'max' => '',
                        'preview_size' => 'thumbnail',
                        'insert' => 'append',
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
            array (
                'key' => '576a9416b754c',
                'name' => 'parallax',
                'label' => 'Parallax',
                'display' => 'row',
                'sub_fields' => array (
                    array (
                        'key' => 'field_576a9423b754d',
                        'label' => 'Image',
                        'name' => 'image',
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
                        'key' => 'field_576b9cc032420',
                        'label' => 'Title',
                        'name' => 'title',
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
                        'key' => 'field_576b9ccb32421',
                        'label' => 'Content',
                        'name' => 'content',
                        'type' => 'wysiwyg',
                        'instructions' => '',
                        'required' => '',
                        'conditional_logic' => '',
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'tabs' => 'all',
                        'toolbar' => 'full',
                        'media_upload' => 1,
                    ),
                    array (
                        'key' => 'field_576b9cd932422',
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'url',
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
 * Bricks image templates styles
 *
 * @param $scripts
 * @return array
 */
function bricks_image_add_styles( $scripts )
{
    $plugin_dir_url = plugins_url('bricks-image-templates');

    return array_merge($scripts,
        array(
            'full-width-image' => array(
                'brick-full-width-image' => $plugin_dir_url . '/css/full-width-image.min.css'
            ),
            'slider' => array(
                'brick-slider' => $plugin_dir_url . '/css/slider.min.css'
            ),
            'parallax' => array(
                'brick-parallax' => $plugin_dir_url . '/css/parallax.min.css'
            )
        )
    );
}
add_filter( 'bricks_styles_filter', 'bricks_image_add_styles' );

/**
 * Bricks image templates scripts
 *
 * @param $scripts
 * @return array
 */
function bricks_image_add_scripts( $scripts )
{
    $plugin_dir_url = plugins_url('bricks-image-templates');

    return array_merge($scripts,
        array(
            'slider' => array(
                'brick-slick' =>  $plugin_dir_url . '/js/slick.min.js',
                'brick-slider' =>  $plugin_dir_url . '/js/slider.min.js',
            ),
            'parallax' => array(
                'bricks-twinmax' =>  $plugin_dir_url . '/js/TweenMax.min.js',
                'bricks-scroll-magic' =>  $plugin_dir_url . '/js/ScrollMagic.min.js',
                'brick-animation-gsap' =>  $plugin_dir_url . '/js/animation.gsap.min.js',
                'brick-parallax' =>  $plugin_dir_url . '/js/parallax.min.js'
            )

        )
    );
}
add_filter( 'bricks_scripts_filter', 'bricks_image_add_scripts' );

/**
 * Display each brick related to brick-image-templates plugin
 *
 * @param $part
 * @param $layout
 * @return string
 */
function bricks_display_image_template( $part, $layout )
{

    // Get template part
    $template = bricks_get_template_part( 'bricks-image-templates' , $layout );

    if ( is_file($template) ) {

        ob_start();
        load_template( $template, false );
        $part = ob_get_contents();
        ob_end_clean();

    }

    // Return template part

    return $part;

}
add_filter( 'brick_template_full-width-image', 'bricks_display_image_template' , 10, 2 );
add_filter( 'brick_template_slider', 'bricks_display_image_template' , 10, 2 );
add_filter( 'brick_template_parallax', 'bricks_display_image_template' , 10, 2 );