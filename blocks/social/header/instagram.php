<?php

    // Instagram Header Social Menu Item

	$url = 'https://www.instagram.com/'.get_sub_field('username');
	$icn = 'instagram';
	$msg = 'Follow';

?>

<p class="control">
    <a class="button is-link" target="_blank" href="<?php echo $url; ?>">
        <span class="icon">
            <i class="fab fa-<?php echo $icn; ?>"></i>
        </span>
        <span>
            <?php echo $msg; ?>
        </span>
    </a>
</p>