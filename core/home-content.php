<?php

	$parts = array(
		'Hero Slider'		=>	'hero-slider',
		'Sponsor Bar'		=>	'sponsor-bar',
	);

	foreach ($parts as $part=>$slug) {
		
		get_template_part('blocks/home/section',$slug);
	}

?>