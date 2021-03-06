<?php

	// Get items for slider
	$posts = get_posts(array(
	    'post_type'      => 'sponsor',
	    'orderby'        => 'title',
	    'order'          => 'ASC',
	    'numberposts'	 =>	'-1'
	));

?>

<!-- Sponsor Slider Section -->
<section style="margin-top: -4rem;margin-bottom: 6rem;">
  <div class="slider sponsors">
    <?php
      
      foreach ($posts as $post) {
        
        setup_postdata($post);

        echo '<a target="_blank" href="'.get_field('url').'"><img src="'.get_field('logo').'" /></a>';

        wp_reset_postdata();
      }

    ?>
  </div>
</section>
<!-- End Sponsor Slider Section -->

<script type="text/javascript">

  jQuery(document).ready(function($) {
    
    $('.sponsors').slick({
    	slidesToShow: 5,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		pauseOnHover: true,
    });

  });

</script>