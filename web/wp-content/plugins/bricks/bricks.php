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

                $parts .= apply_filters( "brick_template_$layout", '', $layout );

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
