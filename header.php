<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    
    
    
<title><?php if ( is_home() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php bloginfo('description'); ?><?php } ?>
<?php if ( is_search() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Результаты&nbsp; поиска<?php } ?>
<?php if ( is_author() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Архив автора<?php } ?>
<?php if ( is_single() ) { ?><?php wp_title(''); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
<?php if ( is_page() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php wp_title(''); ?><?php } ?>
<?php if ( is_category() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Архив&nbsp;| &nbsp;<?php single_cat_title(); ?><?php } ?>
<?php if ( is_month() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Архив&nbsp; <?php the_time('F'); ?><?php } ?>
<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Метки&nbsp;|&nbsp;<?php  single_tag_title("", true); } } ?></title>
    
    
    
    
<meta name="keywords" content="" />
<meta name="description" content="" />
<?PHP wp_head();?>
</head>
<body>
<div id="wrapper">
  <div id="header">
    <div id="logo">
      <h1><a href="#">Culinary</a></h1>
      <h2><a href="http://www.freecsstemplates.org/">Template By Free CSS Templates</a></h2>
    </div>
    <!-- end div#logo -->
  </div>
  <!-- end div#header -->
   <!--
      <ul>
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Products</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
      -->
<?php
 if ( function_exists( 'wp_nav_menu' ) )
			        wp_nav_menu( 
				        array( 
				        'theme_location' => 'custom-menu',
				        'fallback_cb'=> 'custom_menu',
				        'container' => 'ul',
				        'menu_id' => 'menu',
				        'menu_class' => '') 
					);
			    else custom_menu();
				?>
  <!-- end div#menu -->