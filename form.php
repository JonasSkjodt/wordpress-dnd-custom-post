<div class="char_fields_box pad-char">
    <p class="meta-options char_field_fields">
        <label for="main-hitpoints">Character hit points</label>
        <input id="main-hitpoints"
            type="number"
			placeholder="Insert number"
            name="main-hitpoints"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'main-hitpoints', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="main-armorclass">Character armor class</label>
        <input id="main-armorclass"
            type="number"
			placeholder="Insert number"
            name="main-armorclass"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'main-armorclass', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="main-level">Character level</label>
        <input id="main-level"
            type="number"
			placeholder="Insert number"
            name="main-level"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'main-level', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="main-age">Character age</label>
        <input id="main-age"
            type="number"
			placeholder="Insert number"
            name="main-age"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'main-age', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="main-work">Character back story profession</label>
        <input id="main-work"
            type="text"
            name="main-work"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'main-work', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="main-subrace">Character Subrace</label>
        <input id="main-subrace"
            type="text"
            name="main-subrace"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'main-subrace', true ) ); ?>">
    </p>
</div>
<div class="char_fields_box pad-char">
    <p class="meta-options char_field_fields">
        <label for="stats-str">Character strength</label>
        <input id="stats-str"
            type="number"
			placeholder="Insert number"
            name="stats-str"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'stats-str', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="stats-dex">Character dexterity</label>
        <input id="stats-dex"
            type="number"
			placeholder="Insert number"
            name="stats-dex"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'stats-dex', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="stats-con">Character constitution</label>
        <input id="stats-con"
            type="number"
			placeholder="Insert number"
            name="stats-con"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'stats-con', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="stats-int">Character intelligence</label>
        <input id="stats-int"
            type="number"
			placeholder="Insert number"
            name="stats-int"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'stats-int', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="stats-wis">Character wisdom</label>
        <input id="stats-wis"
            type="number"
			placeholder="Insert number"
            name="stats-wis"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'stats-wis', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="stats-cha">Character charisma</label>
        <input id="stats-cha"
            type="number"
			placeholder="Insert number"
            name="stats-cha"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'stats-cha', true ) ); ?>">
    </p>
</div>
<div class="char_fields_box pad-char">
    <p class="meta-options char_field_fields">
        <label for="saving-str">Saving Throws Strength</label>
        <input id="saving-str"
            type="number"
			placeholder="Insert number"
            name="saving-str"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'saving-str', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="saving-dex">Saving Throws Dexterity</label>
        <input id="saving-dex"
            type="number"
			placeholder="Insert number"
            name="saving-dex"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'saving-dex', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="saving-con">Saving Throws Constitution</label>
        <input id="saving-con"
            type="number"
			placeholder="Insert number"
            name="saving-con"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'saving-con', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="saving-int">Saving Throws Intelligence</label>
        <input id="saving-int"
            type="number"
			placeholder="Insert number"
            name="saving-int"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'saving-int', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="saving-wis">Saving Throws Wisdom</label>
        <input id="saving-wis"
            type="number"
			placeholder="Insert number"
            name="saving-wis"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'saving-wis', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="saving-cha">Saving Throws Charisma</label>
        <input id="saving-cha"
            type="number"
			placeholder="Insert number"
            name="saving-cha"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'saving-cha', true ) ); ?>">
    </p>
</div>
<div class="char_fields_box pad-char">
    <p class="meta-options char_field_fields">
        <label for="skill-acrobatics">Skill Acrobatics</label>
        <input id="skill-acrobatics"
            type="number"
			placeholder="Insert number"
            name="skill-acrobatics"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'skill-acrobatics', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="skill-animalhandling">Animal Handling</label>
        <input id="skill-animalhandling"
            type="number"
			placeholder="Insert number"
            name="skill-animalhandling"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'skill-animalhandling', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="skill-arcana">Skill Arcana</label>
        <input id="skill-arcana"
            type="number"
			placeholder="Insert number"
            name="skill-arcana"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'skill-arcana', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="skill-athletics">Skill Athletics</label>
        <input id="skill-athletics"
            type="number"
			placeholder="Insert number"
            name="skill-athletics"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'skill-athletics', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="skill-deception">Skill Deception</label>
        <input id="skill-deception"
            type="number"
			placeholder="Insert number"
            name="skill-deception"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'skill-deception', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="skill-history">Skill History</label>
        <input id="skill-history"
            type="number"
			placeholder="Insert number"
            name="skill-history"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'skill-history', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="skill-insight">Skill Insight</label>
        <input id="skill-insight"
            type="number"
			placeholder="Insert number"
            name="skill-insight"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'skill-insight', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="skill-intimidation">Skill Intimidation</label>
        <input id="skill-intimidation"
            type="number"
			placeholder="Insert number"
            name="skill-intimidation"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'skill-intimidation', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="skill-investigation">Skill Investigation</label>
        <input id="skill-investigation"
            type="number"
			placeholder="Insert number"
            name="skill-investigation"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'skill-investigation', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="skill-medicine">Skill Medicine</label>
        <input id="skill-medicine"
            type="number"
			placeholder="Insert number"
            name="skill-medicine"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'skill-medicine', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="skill-nature">Skill Nature</label>
        <input id="skill-nature"
            type="number"
			placeholder="Insert number"
            name="skill-nature"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'skill-nature', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="skill-perception">Skill Perception</label>
        <input id="skill-perception"
            type="number"
			placeholder="Insert number"
            name="skill-perception"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'skill-perception', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="skill-performance">Skill Performance</label>
        <input id="skill-performance"
            type="number"
			placeholder="Insert number"
            name="skill-performance"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'skill-performance', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="skill-persuasion">Skill Persuasion</label>
        <input id="skill-persuasion"
            type="number"
			placeholder="Insert number"
            name="skill-persuasion"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'skill-persuasion', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="skill-religion">Skill Religion</label>
        <input id="skill-religion"
            type="number"
			placeholder="Insert number"
            name="skill-religion"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'skill-religion', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="skill-sleightofhand">skill-sleightofhand</label>
        <input id="skill-sleightofhand"
            type="number"
			placeholder="Insert number"
            name="skill-sleightofhand"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'skill-sleightofhand', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="skill-stealth">Skill Stealth</label>
        <input id="skill-stealth"
            type="number"
			placeholder="Insert number"
            name="skill-stealth"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'skill-stealth', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="skill-survival">Skill Survival</label>
        <input id="skill-survival"
            type="number"
			placeholder="Insert number"
            name="skill-survival"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'skill-survival', true ) ); ?>">
    </p>
</div>
<div class="char_fields_box pad-char">
    <p class="meta-options char_field_fields">
        <label for="weapon-basic">Weapon Basic Attack</label>
        <input id="weapon-basic"
            type="text"
            name="weapon-basic"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'weapon-basic', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="weapon-battleaxe">Weapon Battleaxe</label>
        <input id="weapon-battleaxe"
            type="text"
            name="weapon-battleaxe"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'weapon-battleaxe', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="weapon-crossbow">Weapon Crossbow</label>
        <input id="weapon-crossbow"
            type="text"
            name="weapon-crossbow"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'weapon-crossbow', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="weapon-dagger">Weapon Dagger</label>
        <input id="weapon-dagger"
            type="text"
            name="weapon-dagger"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'weapon-dagger', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="weapon-handaxe">Weapon Handaxe</label>
        <input id="weapon-handaxe"
            type="text"
            name="weapon-handaxe"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'weapon-handaxe', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="weapon-lighthammer">Weapon Light Hammer</label>
        <input id="weapon-lighthammer"
            type="text"
            name="weapon-lighthammer"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'weapon-lighthammer', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="weapon-longsword">Weapon Longsword</label>
        <input id="weapon-longsword"
            type="text"
            name="weapon-longsword"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'weapon-longsword', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="weapon-shortbow">Weapon Shortbow</label>
        <input id="weapon-shortbow"
            type="text"
            name="weapon-shortbow"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'weapon-shortbow', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="weapon-shortsword">Weapon Shortsword</label>
        <input id="weapon-shortsword"
            type="text"
            name="weapon-shortsword"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'weapon-shortsword', true ) ); ?>">
    </p>
    <p class="meta-options char_field_fields">
        <label for="weapon-rapier">Weapon Rapier</label>
        <input id="weapon-rapier"
            type="text"
            name="weapon-rapier"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'weapon-rapier', true ) ); ?>">
    </p>
</div>
<div class="char_fields_box pad-char">
    <p class="meta-options char_field_fields">
        <label for="dnd-gold">Gold Amount</label>
        <input id="dnd-gold"
            type="number"
			placeholder="Insert number"
            name="dnd-gold"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'dnd-gold', true ) ); ?>">
    </p>
</div>
