<?php
	
	$counter = 0;
    
    if( have_rows('social_accounts', 'option') ) {

        while( have_rows('social_accounts', 'option') ) {

            if ($counter > 3) {
                break;
            }

            the_row();

            $network = the_sub_field('network');
            $block = "blocks/social/header/". $network .".php";
            include(locate_template($block));

            $counter++;
        }
    }
?>