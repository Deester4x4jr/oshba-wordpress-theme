<?php

    // Twitter Header Social Menu Item

	$url = 'https://www.twitter.com/'.get_sub_field('username');
	$icn = 'twitter-f';
	$msg = 'Tweet';

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