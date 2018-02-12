<?php
    
    $counter = 0;
    
    if( have_rows('social_accounts', 'option') ) {

        while( have_rows('social_accounts', 'option') ) {

            if ($counter > 3) {
                break;
            }

            the_row();

            $network = get_sub_field('network');
            $vars = "blocks/social/header/". $network .".php";
            include(locate_template($vars));

            $item = "blocks/social/header/social-menu-item.php";
            include(locate_template($item));

            $counter++;
        }
    }
?>