<?php

	// Get items for slider
	$posts = get_posts(array(
	    'post_type'      => 'sponsor',
	    'orderby'        => 'title',
	    'order'          => 'ASC',
	));

?>

<!-- Sponsor Slider Section -->
<section>
  <div class="slider sponsors">
    <?php
      
      foreach ($posts as $post) {
        
        setup_postdata($post);

        echo '<a href="'.get_field('url').'"><img src="'.get_field('logo').'" /></a>';

        wp_reset_postdata();
      }

    ?>
  </div>
</section>
<!-- End Sponsor Slider Section -->

<script type="text/javascript">

  jQuery(document).ready(function($) {
    
    $('.sponsors').slick({
    	slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
    });

  });

</script>