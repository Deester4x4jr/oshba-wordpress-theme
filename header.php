<!doctype html>
<html <?php language_attributes(); ?> class="no-js has-navbar-fixed-top">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- Social Sharing Block (Replace this with PHP Later) -->

			<!-- Google+ Stuff -->
			<meta itemscope itemtype="http://schema.org/Article" />
			<meta itemprop="headline" content="Some Cool Title" />
			<meta itemprop="description" content="Cras mattis consectetur purus sit amet fermentum. Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis." />
			<meta itemprop="image" content="http://www.thaw.io/wp-content/uploads/2018/02/og-image-horizontal.png" />

			<!-- Facebook/LinkedIn Social Sharing -->
			<meta property="og:locale" content="en_US" />
			<meta property="og:type" content="article" />
			<meta property="og:site_name" content="Thaw Marketing" />
			<meta property="og:url" content="http://www.thaw.io" />
			<meta property="og:title" content="Some Cool Title">
			<meta property="og:description" content="Cras mattis consectetur purus sit amet fermentum. Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.">
			<meta property="og:image" content="http://www.thaw.io/wp-content/uploads/2018/02/og-image-horizontal.png">

			<!-- Pinterest Sharing Options (Vertical & Square Orientation) -->
			<meta property="og:image" content="http://www.thaw.io/wp-content/uploads/2018/02/og-image-vertical.png">
			<meta property="og:image" content="http://www.thaw.io/wp-content/uploads/2018/02/og-image-square.png">

			<!-- Twitter Card Extra Stuff -->
			<meta name="twitter:card" content="summary_large_image" />
			<meta name="twitter:site" content="@Deester4x4jr" />

		<!-- End Social Sharing Block -->

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- nav -->
					<nav id="navbar" class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
						<div class="container">
  							
  							<div class="navbar-brand">
  								<a class="navbar-item" href="https://bulma.io">
									<img src="https://cohba.org/wp-content/uploads/2015/09/logo.jpg" alt="Bulma: a modern CSS framework based on Flexbox">
								</a>
								<button class="button navbar-burger" data-target="main-nav">
							      <span></span>
							      <span></span>
							      <span></span>
							    </button>
  							</div>

  							<div id="main-nav" class="navbar-menu">
  								<div class="navbar-start">
									<?php echo header_nav_menu(); ?>
								</div>

								<div class="navbar-end">
									<div class="navbar-item">
										<div class="field is-grouped is-grouped-centered">
											<?php include locate_template('blocks/social/header/social-menu.php'); ?>
										</div>
									</div>
								</div>
  							</div>
					</div>
					<!-- <nav class="level" role="navigation"> -->
						<?php //html5blank_nav(); ?>
					<!-- </nav> -->
					<!-- /nav -->

			</header>
			<!-- /header -->
