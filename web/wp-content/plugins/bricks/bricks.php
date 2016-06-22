<?php
/**
 * Plugin Name: Bricks
 * Description: Building a theme with pre-defined bricks using WordPress Fields API
 * Version: 1.0
 * Author: Studio Goliath
 * Author URI: http://www.studio-goliath.com/
 */

if( function_exists('acf_add_local_field_group') ):

    $layouts = array();

    acf_add_local_field_group(array (
        'key' => 'group_575ad2a97bae8',
        'title' => 'Bricks',
        'fields' => array (
            array (
                'key' => 'field_575ad2e20ae06',
                'label' => 'Brick',
                'name' => 'brick',
                'type' => 'flexible_content',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'button_label' => 'Add Row',
                'min' => '',
                'max' => '',
                'layouts' => apply_filters( 'layouts_filter', $layouts )
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ),
            ),
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => 1,
        'description' => '',
    ));

endif;

/**
 * Display each brick
 *
 * @param $content
 * @return string
 */
function bricks_display_parts( $content ) {

    $parts = '';

    if ( function_exists('have_rows') ) {
        if ( have_rows('brick') ) {
            while ( have_rows('brick') ) {

                the_row();

                $layout = get_row_layout();

                // Get template part

                $parts .= apply_filters( "brick_template_$layout", '', $layout );

                // Scripts

                $scripts = array(
                    'css' => apply_filters( 'bricks_styles_filter', array() ),
                    'js' => apply_filters( 'bricks_scripts_filter', array() )
                );

                // Enqueue related brick css

                foreach ($scripts['css'] as $key => $styles) {
                    if ($key === $layout) {
                        foreach ($styles as $key => $path) {
                            if (!wp_style_is($key, $list = 'enqueued')) {
                                wp_enqueue_style($key);
                            }
                        }
                    }
                }

                // Enqueue related brick js

                foreach($scripts['js'] as $key => $scripts) {
                    if ($key === $layout) {
                        foreach ($scripts as $key => $path) {
                            if (!wp_script_is($key, $list = 'enqueued')) {
                                wp_enqueue_script($key);
                            }
                        }
                    }
                }

            }
        }
    }

    return $content.$parts;

}
add_filter( 'the_content', 'bricks_display_parts' );

/**
 * Get template part.
 *
 * @param string $plugin
 * @param string $slug
 * @return string
 */
function bricks_get_template_part( $plugin, $slug ) {

    $template = '';

    // Look in yourtheme/bricks/plugin/slug.php then plugin/parts/row-slug.php
    $template = locate_template( "/bricks/{$plugin}/row-{$slug}.php", false );

    // If template is not overridden check in plugin/parts/row-slug.php
    if ( !$template && is_file( WP_PLUGIN_DIR . "/{$plugin}/parts/row-{$slug}.php" ) ) {
        $template = WP_PLUGIN_DIR . "/{$plugin}/parts/row-{$slug}.php";
    }

    return $template;

}

/**
 * Register all the template scripts
 */
function bricks_register_scripts() {

    $scripts = array(
        'css' => apply_filters( 'bricks_styles_filter', array() ),
        'js' => apply_filters( 'bricks_scripts_filter', array() )
    );

    // Css

    foreach($scripts['css'] as $key => $styles) {
        foreach ($styles as $key => $path) {
            wp_register_style($key, $path);
        }
    }

    // Js

    foreach($scripts['js'] as $key => $scripts) {
        foreach ($scripts as $key => $path) {
            wp_register_script($key, $path);
        }
    }

}
add_action('wp_enqueue_scripts', 'bricks_register_scripts');
