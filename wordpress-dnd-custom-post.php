<?php
defined( 'ABSPATH' ) or die( 'cheats?' );
/**
 * Plugin Name: Worklizard DnD Characters
 * Plugin URI: https://github.com/JonasSkjodt/wordpress-dnd-custom-post/
 * Description: Wordpress custom post editor for DnD character creation
 * Version: 0.1
 * Author: Jonas skjodt
 * Author URI: https://github.com/JonasSkjodt/
 * License: GPL2
 */

include( plugin_dir_path(__FILE__) . 'functions/dnd-cuustom-post-admin.php');

/**
 * Enqueue styles and scripts
 * Enqueue the css to show up inside the custom post type dndcharacters  
 **/
add_action('admin_enqueue_scripts','worklizard_post_admin_css');
function worklizard_post_admin_css() {

    global $post_type;

	// find our custom post type
	if ((isset($_GET['post_type']) && $_GET['post_type'] == 'dndcharacters') || (isset($post_type) && $post_type == 'dndcharacters')) :

       wp_enqueue_style( 'worklizard-dnd-character-admin', plugins_url('/css/dnd-admin.css', __FILE__), array(), '1.0' );

    endif;

}

/**
 * Register meta boxes.
 */
function dnd_character_register_meta_boxes() {
    add_meta_box( 
    'char-details', 
    __( 'Character info', 'inmyculture' ), //Initial title for meta box area
    'dnd_character_display_callback', 
    );
}

/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */

function dnd_character_display_callback( $post ) {
    include plugin_dir_path( __FILE__ ) . './form.php';
}

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */

function dnd_character_save_meta_box( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( $parent_id = wp_is_post_revision( $post_id ) ) {
        $post_id = $parent_id;
    }
    $fields = [ // show our input fields
        
        // main handlers
        'main-hitpoints',
        'main-armorclass',
        'main-level',

        // race and class details
        'main-race',
	'main-subrace',
        'main-class', 
        'main-age',
        'main-work',

        // raw stats
        'stats-str',
        'stats-dex',
        'stats-con',
        'stats-int',
        'stats-wis',
        'stats-cha',
        
        // saving throws
        'saving-str',
        'saving-dex',
        'saving-con',
        'saving-int',
        'saving-wis',
        'saving-cha',
        
        // skills
        'skill-acrobatics',
        'skill-animalhandling',
        'skill-arcana',
        'skill-athletics',
        'skill-deception',
        'skill-history',
        'skill-insight',
        'skill-intimidation',
        'skill-investigation',
        'skill-medicine',
        'skill-nature',
        'skill-perception',
        'skill-performance',
        'skill-persuasion',
        'skill-religion',
        'skill-sleightofhand',
        'skill-stealth',
        'skill-survival',
		
	//weapons
	'weapon-basic',
	'weapon-battleaxe',
	'weapon-crossbow',
	'weapon-dagger',
	'weapon-handaxe',
	'weapon-lighthammer',
	'weapon-longsword',
	'weapon-shortbow',
	'weapon-shortsword',
	'weapon-rapier',
		
	//gold
	'dnd-gold',	
		
    ];
    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
     }
}
add_action( 'save_post', 'dnd_character_save_meta_box' );

/**
* The function to register our custom post type for DnD Characters
*/

function create_posttype_dnd_characters() {
 
    register_post_type( 'dndcharacters',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'DnD Characters' ),
                'singular_name' => __( 'DnD Character' )
            ),
            'public' => true,
            'register_meta_box_cb' => 'dnd_character_register_meta_boxes',
            'has_archive' => true,
            'rewrite' => array('slug' => 'dnd-characters'),
            'show_in_rest' => true,
            'supports' => array(
                'editor',
                'title',
                'excerpt',
                'thumbnail',
		// uncomment the following to insert category, tags, etc. in the DND custom Wordpress post
                //'custom-fields', 
                //'revisions',
                ),
                //'taxonomies'   => array(
                //    'post_tag',
                //    'category',
                //)
            )
        );
        //register_taxonomy_for_object_type( 'category', 'dndcharacters' );
        //register_taxonomy_for_object_type( 'post_tag', 'dndcharacters' );
   }
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype_dnd_characters' );

/**
 * DND CHARACTERS
 * Creating a function to create custom post type for DnD Characters
 * @since inmyculture 1.03 
 */
 
function custom_post_type_dnd_characters() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'DnD Characters', 'Post Type General Name', 'inmyculture' ),
        'singular_name'       => _x( 'DnD Character', 'Post Type Singular Name', 'inmyculture' ),
        'menu_name'           => __( 'DnD Characters', 'inmyculture' ),
        'parent_item_colon'   => __( 'Parent DnD Character', 'inmyculture' ),
        'all_items'           => __( 'All DnD Characters', 'inmyculture' ),
        'view_item'           => __( 'View DnD Character', 'inmyculture' ),
        'add_new_item'        => __( 'Add New DnD Character', 'inmyculture' ),
        'add_new'             => __( 'Add New', 'inmyculture' ),
        'edit_item'           => __( 'Edit DnD Character', 'inmyculture' ),
        'update_item'         => __( 'Update DnD Character', 'inmyculture' ),
        'search_items'        => __( 'Search DnD Character', 'inmyculture' ),
        'not_found'           => __( 'Not Found', 'inmyculture' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'inmyculture' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'dnd-characters', 'inmyculture' ),
        'description'         => __( 'Database for DnD Characters', 'inmyculture' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'dndcharacters', $args );
 
}
 
/** 
 * Hook into the 'init' action so that the function
 * Containing our post type registration is not 
 * unnecessarily executed. 
 */
 
add_action( 'init', 'custom_post_type_dnd_characters', 0 );
