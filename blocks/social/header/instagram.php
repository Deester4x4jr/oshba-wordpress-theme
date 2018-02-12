<?php

    // Instagram Header Social Menu Item

	$url = 'https://www.facebook.com/'.get_sub_field('username');
	$icn = 'facebook-f';
	$msg = 'Like Us';

?>

<p class="control">
    <a class="button is-link" target="_blank" href="<?php echo $url; ?>">
        <span class="icon">
            <i class="fab <?php echo $icn; ?>"></i>
        </span>
        <span>
            <?php echo $msg; ?>
        </span>
    </a>
</p>