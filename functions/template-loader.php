<?php
defined( 'ABSPATH' ) or die( 'cheats?' );
/**
 * To do - integrate more fluidly // tests
 */
function load_dndcharacters_template( $template ) {
    global $post;

    if ( 'dndcharacters' === $post->post_type && locate_template( array( 'dnd-template.php' ) ) !== $template ) {
        /*
         * This is a 'dndcharacters' post
         * AND a 'single dndcharacters template' is not found on
         * theme or child theme directories, so load it
         * from our plugin directory.
         */
        return plugin_dir_path( __FILE__ ) . 'includes/templates/single-dnd-characters.php';
    }

    return $template;
}

add_filter( 'single_template', 'load_dndcharacters_template' );
