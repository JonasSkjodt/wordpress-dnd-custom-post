<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Worklizard DnD Characters 
 * DnD character creation admin area
 * CLASS CHOICE
 * Adds the radio select buttons for class choice
 */
function dnd_character_choose_radio() {

		/**
		 * Add the meta box
		 * 1st parameter gives the meta box an ID
		 * 2nd parameter gives the headline for the meta box
		 * 3rd parameter adds the callback function which prints the contents in the box
		 * 4th parameter is for custom post type, ie dndcharacters
		 */
        add_meta_box(
                'class_sectionid', 'Choose your class', 'dnd_character_choose_radio_callback', 'dndcharacters'
        );

}

add_action( 'add_meta_boxes', 'dnd_character_choose_radio' );

/**
 * Prints the box content.
 * 
 * @param WP_Post $post The object for the current post/page.
 */
function dnd_character_choose_radio_callback( $post ) {

        // Add an nonce field so we can check for it later and security
        wp_nonce_field( 'dnd_character_choose_radio_meta_box', 'dnd_character_choose_radio_meta_box_nonce' );

        /*
         * Use get_post_meta() to retrieve an existing value
         * from the database and use the value for the form.
         */
        $classvalue = get_post_meta( $post->ID, 'main-class', true ); //my_key is a meta_key. Change it to whatever you want

        ?>

	<!-- Add our radio button choices -->
  <div class="meta-options char_field_fields classes dnd-checkbox">
        <label for="main-class"><?php _e( "Choose your character:", 'inmyculture' ); ?></label>
        
        <div class="char_checkbox_box">
        <input id="dndclass1" type="radio" name="class_radio_buttons" value="Barbarian" <?php checked( $classvalue, 'Barbarian' ); ?>>
        <label for="dndclass1">
			<div class="entry-meta card-pad"> 
				<img src="<?php echo plugins_url('images/dnd-barb-min1.jpg', dirname(__FILE__)); ?>">
					<div class="class-pick-name">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none" class="card-curve">
							<path d="M1280 140V0S993.46 140 640 139 0 0 0 0v140z" fill="#000"></path>
						</svg>
						<span>Barbarian</span>
					</div>
			</div>
		</label>
        
        <input id="dndclass2" type="radio" name="class_radio_buttons" value="Bard" <?php checked( $classvalue, 'Bard' ); ?>>
        <label for="dndclass2">
			<div class="entry-meta card-pad"> 
				<img src="<?php echo plugins_url('images/dnd-bard-min.jpg', dirname(__FILE__)); ?>">
					<div class="class-pick-name">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none" class="card-curve">
							<path d="M1280 140V0S993.46 140 640 139 0 0 0 0v140z" fill="#000"></path>
						</svg>
						<span>Bard</span>
					</div>
			</div>
		</label>
        
        <input id="dndclass3" type="radio" name="class_radio_buttons" value="Cleric" <?php checked( $classvalue, 'Cleric' ); ?>>
        <label for="dndclass3">
			<div class="entry-meta card-pad"> 
				<img src="<?php echo plugins_url('images/dnd-cleric-min.jpg', dirname(__FILE__)); ?>">
					<div class="class-pick-name">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none" class="card-curve">
							<path d="M1280 140V0S993.46 140 640 139 0 0 0 0v140z" fill="#000"></path>
						</svg>
						<span>Cleric</span>
					</div>
			</div>
		</label>
        
        <input id="dndclass4" type="radio" name="class_radio_buttons" value="Druid" <?php checked( $classvalue, 'Druid' ); ?>>
        <label for="dndclass4">
			<div class="entry-meta card-pad"> 
				<img src="<?php echo plugins_url('images/dnd-druid-min.jpg', dirname(__FILE__)); ?>">
					<div class="class-pick-name">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none" class="card-curve">
							<path d="M1280 140V0S993.46 140 640 139 0 0 0 0v140z" fill="#000"></path>
						</svg>
						<span>Druid</span>
					</div>
			</div>
		</label>
        
        <input id="dndclass5" type="radio" name="class_radio_buttons" value="Fighter" <?php checked( $classvalue, 'Fighter' ); ?>>
        <label for="dndclass5">
			<div class="entry-meta card-pad"> 
				<img src="<?php echo plugins_url('images/dnd-fighter-min.jpg', dirname(__FILE__)); ?>">
					<div class="class-pick-name">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none" class="card-curve">
							<path d="M1280 140V0S993.46 140 640 139 0 0 0 0v140z" fill="#000"></path>
						</svg>
						<span>Fighter</span>
					</div>
			</div>
		</label>
        
        <input id="dndclass6" type="radio" name="class_radio_buttons" value="Monk" <?php checked( $classvalue, 'Monk' ); ?>>
        <label for="dndclass6">
			<div class="entry-meta card-pad"> 
				<img src="<?php echo plugins_url('images/dnd-monk-min.jpg', dirname(__FILE__)); ?>">
					<div class="class-pick-name">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none" class="card-curve">
							<path d="M1280 140V0S993.46 140 640 139 0 0 0 0v140z" fill="#000"></path>
						</svg>
						<span>Monk</span>
					</div>
			</div>
		</label>
        
        <input id="dndclass7" type="radio" name="class_radio_buttons" value="Necromancer" <?php checked( $classvalue, 'Necromancer' ); ?>>
        <label for="dndclass7">
				<div class="entry-meta card-pad"> 
				<img src="<?php echo plugins_url('images/dnd-necro-min.jpg', dirname(__FILE__)); ?>">
					<div class="class-pick-name">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none" class="card-curve">
							<path d="M1280 140V0S993.46 140 640 139 0 0 0 0v140z" fill="#000"></path>
						</svg>
						<span>Necromancer</span>
					</div>
			</div>
		</label>
        
        <input id="dndclass8" type="radio" name="class_radio_buttons" value="Paladin" <?php checked( $classvalue, 'Paladin' ); ?>>
        <label for="dndclass8">
			<div class="entry-meta card-pad"> 
				<img src="<?php echo plugins_url('images/dnd-paladin-min.jpg', dirname(__FILE__)); ?>">
					<div class="class-pick-name">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none" class="card-curve">
							<path d="M1280 140V0S993.46 140 640 139 0 0 0 0v140z" fill="#000"></path>
						</svg>
						<span>Paladin</span>
					</div>
			</div>
		</label>
        
        <input id="dndclass9" type="radio" name="class_radio_buttons" value="Ranger" <?php checked( $classvalue, 'Ranger' ); ?>>
        <label for="dndclass9">
			<div class="entry-meta card-pad"> 
				<img src="<?php echo plugins_url('images/dnd-ranger-min.jpg', dirname(__FILE__)); ?>">
					<div class="class-pick-name">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none" class="card-curve">
							<path d="M1280 140V0S993.46 140 640 139 0 0 0 0v140z" fill="#000"></path>
						</svg>
						<span>Ranger</span>
					</div>
			</div>
		</label>
        
        <input id="dndclass10" type="radio" name="class_radio_buttons" value="Rogue" <?php checked( $classvalue, 'Rogue' ); ?>>
        <label for="dndclass10">
			<div class="entry-meta card-pad"> 
				<img src="<?php echo plugins_url('images/dnd-rogue-min.jpg', dirname(__FILE__)); ?>">
					<div class="class-pick-name">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none" class="card-curve">
							<path d="M1280 140V0S993.46 140 640 139 0 0 0 0v140z" fill="#000"></path>
						</svg>
						<span>Rogue</span>
					</div>
			</div>
		</label>
        
        <input id="dndclass11" type="radio" name="class_radio_buttons" value="Sorceror" <?php checked( $classvalue, 'Sorceror' ); ?>>
        <label for="dndclass11">
			<div class="entry-meta card-pad"> 
				<img src="<?php echo plugins_url('images/dnd-sorceror-min.jpg', dirname(__FILE__)); ?>">
					<div class="class-pick-name">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none" class="card-curve">
							<path d="M1280 140V0S993.46 140 640 139 0 0 0 0v140z" fill="#000"></path>
						</svg>
						<span>Sorceror</span>
					</div>
			</div>
		</label>
        
        <input id="dndclass12" type="radio" name="class_radio_buttons" value="Warlock" <?php checked( $classvalue, 'Warlock' ); ?>>
        <label for="dndclass12">
			<div class="entry-meta card-pad"> 
				<img src="<?php echo plugins_url('images/dnd-warlock-min.jpg', dirname(__FILE__)); ?>">
					<div class="class-pick-name">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none" class="card-curve">
							<path d="M1280 140V0S993.46 140 640 139 0 0 0 0v140z" fill="#000"></path>
						</svg>
						<span>Warlock</span>
					</div>
			</div>
		</label>
        
        <input id="dndclass13" type="radio" name="class_radio_buttons" value="Wizard" <?php checked( $classvalue, 'Wizard' ); ?>>
        <label for="dndclass13">
			<div class="entry-meta card-pad"> 
				<img src="<?php echo plugins_url('images/dnd-wizard-min.jpg', dirname(__FILE__)); ?>">
					<div class="class-pick-name">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none" class="card-curve">
							<path d="M1280 140V0S993.46 140 640 139 0 0 0 0v140z" fill="#000"></path>
						</svg>
						<span>Wizard</span>
					</div>
			</div>
		</label>
            
      	</div>
	  
  </div>

        <?php

}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function dnd_character_choose_radio_save_meta_box_data( $post_id ) {

        /*
         * We need to verify this came from our screen and with proper authorization,
         * because the save_post action can be triggered at other times.
         */

        // Check if our nonce is set.
        if ( !isset( $_POST['dnd_character_choose_radio_meta_box_nonce'] ) ) {
                return;
        }

        // Verify that the nonce is valid.
        if ( !wp_verify_nonce( $_POST['dnd_character_choose_radio_meta_box_nonce'], 'dnd_character_choose_radio_meta_box' ) ) {
                return;
        }

        // If this is an autosave, our form has not been submitted, so we don't want to do anything.
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
                return;
        }

        // Check the user's permissions.
        if ( !current_user_can( 'edit_post', $post_id ) ) {
                return;
        }

        // Sanitize user input.
        $class_meta_value = ( isset( $_POST['class_radio_buttons'] ) ? sanitize_html_class( $_POST['class_radio_buttons'] ) : '' );

        // Update the meta field in the database.
        update_post_meta( $post_id, 'main-class', $class_meta_value );

}

add_action( 'save_post', 'dnd_character_choose_radio_save_meta_box_data' );

/**
 * Worklizard DnD Characters 
 * DnD character creation admin area
 * RACE CHOICE
 * Adds the radio select buttons for Race choice
 */
function dnd_race_choose_radio() {

		//redo the same thing from line 21 and down with a new selection
        add_meta_box(
                'race_sectionid', 'Choose your race', 'dnd_race_choose_radio_callback', 'dndcharacters'
        );

}

add_action( 'add_meta_boxes', 'dnd_race_choose_radio' );

/**
 * Prints the box content.
 * 
 * @param WP_Post $post The object for the current post/page.
 */
function dnd_race_choose_radio_callback( $post ) {

        // Add an nonce field so we can check for it later.
        wp_nonce_field( 'dnd_race_choose_radio_meta_box', 'dnd_race_choose_radio_meta_box_nonce' );

        /*
         * Use get_post_meta() to retrieve an existing value
         * from the database and use the value for the form.
         */
        $racevalue = get_post_meta( $post->ID, 'main-race', true ); //the meta_key

        ?>

  		<div class="meta-options char_field_fields races dnd-checkbox">
        	<label for="main-race"><?php _e( "Choose your race:", 'inmyculture' ); ?></label>
        		<div class="char_checkbox_box">

        <!--<input id="dndrace1" type="radio" name="race_class_buttons" value="Dragonborn" <?php checked( $racevalue, 'Dragonborn' ); ?>>
        <label for="dndrace1"><img src="<?php echo plugins_url('images/dnd-race-dragonborn-min.png', dirname(__FILE__)); ?>"><span>Dragonborn</span></label>-->
        
        <input id="dndrace2" type="radio" name="race_class_buttons" value="Dwarf" <?php checked( $racevalue, 'Dwarf' ); ?>>
        <label for="dndrace2"><img src="<?php echo plugins_url('images/race/dnd-race-dwarf.png', dirname(__FILE__)); ?>"><span>Dwarf</span></label>
        
        <!--<input id="dndrace3" type="radio" name="race_class_buttons" value="Eladrin" <?php checked( $racevalue, 'Eladrin' ); ?>>
        <label for="dndrace3"><img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/dnd-bard-min.jpg'; ?>"><span>Eladrin</span></label>-->
        
        <input id="dndrace4" type="radio" name="race_class_buttons" value="Elf" <?php checked( $racevalue, 'Elf' ); ?>>
        <label for="dndrace4"><img src="<?php echo plugins_url('images/race/dnd-race-elf.png', dirname(__FILE__)); ?>"><span>Elf</span></label>
        
        <input id="dndrace5" type="radio" name="race_class_buttons" value="Gnome" <?php checked( $racevalue, 'Gnome' ); ?>>
        <label for="dndrace5"><img src="<?php echo plugins_url('images/race/dnd-race-gnome.png', dirname(__FILE__)); ?>"><span>Gnome</span></label>
        
        <input id="dndrace6" type="radio" name="race_class_buttons" value="Half-elf" <?php checked( $racevalue, 'Half-elf' ); ?>>
        <label for="dndrace6"><img src="<?php echo plugins_url('images/race/dnd-race-halfelf.png', dirname(__FILE__)); ?>"><span>Half-elf</span></label>
        
        <input id="dndrace7" type="radio" name="race_class_buttons" value="Half-orc" <?php checked( $racevalue, 'Half-orc' ); ?>>
        <label for="dndrace7"><img src="<?php echo plugins_url('images/race/dnd-race-halforc.png', dirname(__FILE__)); ?>"><span>Half-orc</span></label>
        
        <input id="dndrace8" type="radio" name="race_class_buttons" value="Halfling" <?php checked( $racevalue, 'Halfling' ); ?>>
        <label for="dndrace8"><img src="<?php echo plugins_url('images/race/dnd-race-halfling.png', dirname(__FILE__)); ?>"><span>Halfling</span></label>
        
        <input id="dndrace9" type="radio" name="race_class_buttons" value="Human" <?php checked( $racevalue, 'Human' ); ?>>
        <label for="dndrace9"><img src="<?php echo plugins_url('images/race/dnd-race-human.png', dirname(__FILE__)); ?>"><span>Human</span></label>
        
        <input id="dndrace10" type="radio" name="race_class_buttons" value="Tiefling" <?php checked( $racevalue, 'Tiefling' ); ?>>
        <label for="dndrace10"><img src="<?php echo plugins_url('images/race/dnd-race-tiefling.png', dirname(__FILE__)); ?>"><span>Tiefling</span></label>
        
            
        		</div>
  		</div>

        <?php

}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function dnd_race_choose_radio_save_meta_box_data( $post_id ) {

        /*
         * We need to verify this came from our screen and with proper authorization,
         * because the save_post action can be triggered at other times.
         */

        // Check if our nonce is set.
        if ( !isset( $_POST['dnd_race_choose_radio_meta_box_nonce'] ) ) {
                return;
        }

        // Verify that the nonce is valid.
        if ( !wp_verify_nonce( $_POST['dnd_race_choose_radio_meta_box_nonce'], 'dnd_race_choose_radio_meta_box' ) ) {
                return;
        }

        // If this is an autosave, our form has not been submitted, so we don't want to do anything.
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
                return;
        }

        // Check the user's permissions.
        if ( !current_user_can( 'edit_post', $post_id ) ) {
                return;
        }

        // Sanitize user input.
        $race_meta_value = ( isset( $_POST['race_class_buttons'] ) ? sanitize_html_class( $_POST['race_class_buttons'] ) : '' );

        // Update the meta field in the database.
        update_post_meta( $post_id, 'main-race', $race_meta_value );

}

add_action( 'save_post', 'dnd_race_choose_radio_save_meta_box_data' );
