<?php

	$url = 'https://www.facebook.com/'.the_sub_field('username');
	$icn = 'facebook-f';
	$msg = 'Like Us';

?>

<p class="control">
    <a target="_blank" href="<?php echo $url; ?>">
        <span class="icon">
            <i class="fab <?php echo $icn; ?>"></i>
        </span>
        <span>
            <?php echo $msg; ?>
        </span>
    </a>
</p>