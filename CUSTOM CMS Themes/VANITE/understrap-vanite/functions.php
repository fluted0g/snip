<?php
function my_theme_enqueue_styles() {
    $parent_style = 'understrap-styles';
    $parent_theme = wp_get_theme("understrap");
    wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $parent_theme->get( 'Version' ) );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/css/theme.min.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/**
 * Added this snippet for stupid formatting
 */
remove_filter('the_content', 'wpautop');

// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');

?>