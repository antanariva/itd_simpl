<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			header.inc.php
* @Package:		GetSimple
* @Action:		Innovation theme for GetSimple CMS
*
*****************************************************/
?>
<!DOCTYPE html>
<html lang="<?php echo get_site_lang(true); ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"  />
    <title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
    <meta name="generator" content="arms" />
    <link rel="author" href="humans.txt" />
    <meta name="robots" content="index, follow">

	<link href='//fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
	<link href="<?php get_theme_url(); ?>/css/reset.css" rel="stylesheet">
	<link href="<?php get_theme_url(); ?>/css/style.css" rel="stylesheet">
	
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]--> 
	
	<!--[if lt IE 7 ]>
    <script src="<?php get_theme_url(); ?>/js/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
    <![endif]-->

	<?php get_header(); ?>
</head> 

<body id="<?php get_page_slug(); ?>" >
	
<!-- site header -->
	<div id="header">
		<header>
					
			<!-- logo/sitename -->
			<a href="<?php get_site_url(); ?>" id="logo" ><?php get_site_name(); ?></a>
			
			<!-- main navigation -->
			<nav id="main-nav">
				<ul>
					<?php get_navigation(get_page_slug(FALSE)); ?>
				</ul>
			</nav>
		</header>
	</div>	
