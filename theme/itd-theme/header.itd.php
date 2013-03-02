<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		header.itd.php
* @Package:		GetSimple
* @Action:		ITD lab. theme for GetSimple CMS
*
*****************************************************/
?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" > <!--<![endif]-->
<head>
<meta charset="utf-8">

  <title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
	
	<meta name="robots" content="index, follow">

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,900,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cuprum:400&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Exo:800' rel='stylesheet' type='text/css'>
	
	<link href="<?php get_theme_url(); ?>/style.css?v=<?php echo get_site_version(); ?>" rel="stylesheet">
	
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]--> 
	
	<!--[if lt IE 7 ]>
    <script src="<?php get_theme_url(); ?>/assets/js/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
  <![endif]-->

	<?php get_header(); ?>
	
</head> 
<body id="<?php get_page_slug(); ?>" >

<header>
	<div id="top"><!-- Верхняя часть сайта -->
    <div id="header">
	    <div id="undertitle">Блог специалистов: Просто о сложном</div>
		<div id="title"><a href="<?php get_site_url(); ?>" title="Блог разработчиков сайтов, ракетной техники и врачей иммунологов" alt="Блог разработчиков ITD lab."><?php get_site_name(); ?></a>
		<div id="subtitle">Интеллектуальное общение. Анализ. Критика</div>
		</div>
    </div>
	<div id="search"><!-- Поиск по сайту -->
		<div>Поиск по сайту</div>
	</div>
	
	<div id="popular"><!-- Рекламируемые заголовки вверху -->
	<div id="popular1">
		<img src="img/itd.png" alt="Иллюстрация" align="left" id="imgpop">
		<div><a href="itd.html" title="Услуги ITD lab." alt="ITD lab." class="cat">IT-сервис</a></div>
		<h2><a href="itd/sitebuilding.html" title="Заказать разработку сайта" alt="Создание сайтов" class="h2">Создание сайтов</a></h2>
		<div class="desc">Услуги создания и поддержки сайтов, разработка презентаций...</div>
	</div>
	
	<div id="popular2">
		<div><a href="med.html" title="Статьи медицинской тематики" alt="Вопросы медицины" class="cat">Вопросы медицины</a></div>
		<h2><a href="med/vakc.html" title="Вакцинация: взгяд врачей и пациентов" alt="Вакцинация: за и против" class="h2">Вакцинация: за и против</a></h2>
		<div class="desc">Польза и вред прививок, взгляд иммунолога, юридические аспекты</div>
	</div>
	</div>
</header>	