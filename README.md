# Custom Wordpress post type for DND character creation

A starter kit for custom post type DND character creation in Wordpress.

Grab the main handlers after installing the plugin and create your own template with the sanitized input data.

The main handlers are:

        // main handlers
        main-hitpoints
        main-armorclass
        main-level

        // race and class details
        main-race
        main-subrace
        main-class
        main-age
        main-work

        // raw stats
        stats-str
        stats-dex
        stats-con
        stats-int
        stats-wis
        stats-cha
        
        // saving throws
        saving-str
        saving-dex
        saving-con
        saving-int
        saving-wis
        saving-cha
        
        // skills
        skill-acrobatics
        skill-animalhandling
        skill-arcana
        skill-athletics
        skill-deception
        skill-history
        skill-insight
        skill-intimidation
        skill-investigation
        skill-medicine
        skill-nature
        skill-perception
        skill-performance
        skill-persuasion
        skill-religion
        skill-sleightofhand
        skill-stealth
        skill-survival
		
        //weapons
        weapon-basic
        weapon-battleaxe
        weapon-crossbow
        weapon-dagger
        weapon-handaxe
        weapon-lighthammer
        weapon-longsword
        weapon-shortbow
        weapon-shortsword
        weapon-rapier
		
        //gold
        dnd-gold

# Example
An example to echo your custom DND post fields can be done like so:

        $mainhitpoints = esc_attr( get_post_meta( get_the_ID(), 'main-hitpoints', true ) );
        if ($mainhitpoints == '') {
        echo '-';
        } else {
        echo $mainhitpoints;
        }

# Demo

https://worklizard.com/dnd-characters/krumdir/
