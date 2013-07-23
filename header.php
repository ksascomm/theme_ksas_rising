<!DOCTYPE html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<html class="no-js" lang="en"> 

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title><?php create_page_title(); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/stylesheets/app.css">
  <script async type="text/javascript" src="http://fast.fonts.com/jsapi/70cf8df6-44d2-449c-aa79-67f83dadfe9c.js"></script>  
  <!-- Modernizr and Jquery Script -->
  <?php wp_enqueue_script('jquery'); ?> 
  <script src="<?php echo get_template_directory_uri() ?>/assets/javascripts/modernizr.custom.js"></script>
  <?php wp_head(); ?>
  <!-- Make IE a modern browser -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
  <![endif]-->
  <?php include_once("parts-analytics.php") ?> 
</head>
<body>
    <header>
    	<div class="row">
    		<div class="nine columns">
    			<nav id="main_nav">
    			<a href="<?php echo site_url(); ?>"><li class="home"></li></a>
				<?php wp_nav_menu( array( 
					'theme_location' => 'main_nav', 
					'menu_class' => '', 
					'depth' => 1,
					)); ?> 
    			</nav>
    		</div>
    		<div class="two columns last">
    			<ul id="main_nav" class="give">
    				<li class="yellow"><a href="https://secure.jhu.edu/form/givenow?populatedesignation1=The+Hopkins+Fund+(Arts++Sciences+undergraduate+fund)">Give Now</a></li>
    		</div>
		</div>
    </header>
