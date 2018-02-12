<?php

  // Get items for slider
  $posts = get_posts(array(
    'post_type'         => array('event','post','resource'),
    'orderby'           => 'date',
    'order'             => 'DESC',
    'posts_per_page'    => 6,
  ));

?>

<!-- Hero Slider Section -->
<section class="hero is-medium">
  <div class="hero-slider">
    <?php
      
      foreach ($posts as $post) {
        
        setup_postdata($post);

        echo '<div><a href="'.get_permalink().'"><img src="'.get_the_post_thumbnail_url(get_the_ID(),'full').'" /></a></div>';

        wp_reset_postdata();
      }

    ?>
  </div>
</section>
<section class="hero">
  <div class="hero-slider-nav">
    <div class="columns">
      <?php
        
        foreach ($posts as $post) {
          
          setup_postdata($post);

          echo '<div class="column is-one-third"><a href="'.get_permalink().'"><img src="'.get_the_post_thumbnail_url(get_the_ID(),'full').'" /></a></div>';

          wp_reset_postdata();
        }

      ?>
    </div>
  </div>

  <!-- <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Hero title
      </h1>
      <h2 class="subtitle">
        Hero subtitle
      </h2>
    </div>
  </div> -->
</section>
<!-- End Hero Slider Section -->

<script type="text/javascript">

  jQuery(document).ready(function($) {
    
    $('.hero-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      fade: true,
      asNavFor: '.slider-nav'
    });
    
    $('.hero-slider-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      arrows: true,
      centerMode: true,
      focusOnSelect: true
    });

  });

</script>