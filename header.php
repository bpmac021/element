<!DOCTYPE HTML>
<!--[if IE 7]><html class="ie7 old-ie" lang="en"><![endif]-->
<!--[if IE 8]><html class="ie8 old-ie" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if gt IE 9]><html lang="en"><![endif]-->

<head>
	<meta charset="utf-8">

    <!--Prevents Mobile Devices from Zooming all weird-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     
    <!--Page Title-->       
    <title><?php bloginfo('name'); ?> <?php wp_title(" | ",true); // the | is the separator ?></title>
    
    <!--Site Description - used by search engines-->
    <meta name="Description" content="<?php bloginfo('description'); ?>">
            
    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet">
    
    <!-- start WP_HEAD -->
    <?php wp_head(); ?>
    <!-- end WP_HEAD -->

</head>
<!-- Body Class allows you to target via CSS-->
<body <?php body_class(); ?>>

<!-- Development Grid Overlay = 12 columns -->
<!-- Comment out to turn off, uncomment to turn on-->
<!--<div id="gridwrapper">
	<div id="grid">
		<div class="gridcolumn col1">
		</div>
		<div class="gridcolumn col2">
		</div>
		<div class="gridcolumn col3">
		</div>
		<div class="gridcolumn col4">
		</div>
		<div class="gridcolumn col5">
		</div>
		<div class="gridcolumn col6">
		</div>
		<div class="gridcolumn col7">
		</div>
		<div class="gridcolumn col8">
		</div>
		<div class="gridcolumn col9">
		</div>
		<div class="gridcolumn col10">
		</div>
		<div class="gridcolumn col11">
		</div>
		<div class="gridcolumn col12">
		</div>
	</div><!--end #grid-->
<!--</div><!--end #gridwrapper-->

	<header>
		<h1><?php bloginfo('name'); ?></h1>
		<h2><?php bloginfo('description'); ?></h2>
		
		<nav id="mainnav">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav>
	</header>