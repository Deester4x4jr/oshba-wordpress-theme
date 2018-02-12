<?php

	$parts = array(
		'Hero Slider'		=>	'hero-slider',
	);

	foreach ($parts as $part=>$slug) {
		
		get_template_part('blocks/home/section',$slug);
	}

?>