<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>

		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<?php wp_head(); ?>


    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZJL3Q2SEFM"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZJL3Q2SEFM');
</script>

    
    
    </head>
	<body <?php body_class(); ?>>
        

<div id="menu" role="navigation" class="grid top-menu">
  
    
  <nav class="nav" id="nav">
      <?php html5blank_nav('header-menu'); ?>
  </nav> 
    
    
    
</div>

<div class="menu-bg" id="menu-bg"></div>


   

		<!-- wrapper -->
<div class="wrapper">

			<!-- header -->
			<header class="header grid grid-wrapper-1" role="banner">

					<!-- logo -->
					<div class="logo grid-item-1">
						<a href="<?php echo esc_url( home_url() ); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img height="122" width="324" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg" alt="Howard County Solar Farm" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					
			
<div class="grid-item-2">
    
    <div class="logo-small">
						<a href="<?php echo esc_url( home_url() ); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img width="43" height="56" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/HC-Logo.svg" alt="Howard County Solar Farm" class="logo-img">
						</a>
    </div>   
                
            <div id="menu-bar" class="nav-icon menu-item" onclick="menuOnClick()" event="keydown" onkeydown="RemoveEventListener">
		<span class="bar"></span>
		<span class="bar"></span>
		<span class="bar"></span>
    </div>    
    					</div>
    
 
</header>
			<!-- /header -->
