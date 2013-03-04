<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
* @File: 		header.itd.php
* @Action:		ITD lab. theme for GetSimple CMS
* @Autor:       Antanariva, Yekaterinburg, Russia
*****************************************************/
?>
<!DOCTYPE html>
	<!--[if lt IE 7 ]> <html lang="ru" class="ie6"> <![endif]-->
	<!--[if IE 7 ]>    <html lang="ru" class="ie7"> <![endif]-->
	<!--[if IE 8 ]>    <html lang="ru" class="ie8"> <![endif]-->
	<!--[if IE 9 ]>    <html lang="ru" class="ie9"> <![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!--> <html lang="ru" > <!--<![endif]-->
<html lang="<?php echo get_site_lang(true); ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"  />
    <title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
    <meta name="generator" content="arms" />
    <link rel="author" href="humans.txt" />
    <meta name="robots" content="index, follow">

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cuprum:400&subset=cyrillic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Exo:800' rel='stylesheet' type='text/css'>
	<link href="<?php get_theme_url(); ?>/css/reset.css" rel="stylesheet">
	<link href="<?php get_theme_url(); ?>/css/style.css" rel="stylesheet">
	
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]--> 
	
	<!--[if lt IE 9]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
	<![endif]-->
	
	<?php get_header(); ?>
</head> 

<body id="<?php get_page_slug(); ?>" >
	
<!-- site header -->
	<div id="header">
	<header>
		<div id="logo">
			<div id="undertitle">Блог специалистов: Просто о сложном</div>
			<div id="title"><a href="<?php get_site_url(); ?>" title="Блог разработчиков сайтов, ракетной техники и врачей иммунологов" alt="Блог разработчиков ITD lab."><?php get_site_name(); ?></a>
			<div id="subtitle">Интеллектуальное общение. Анализ. Критика</div>
			</div>
		</div>

		<div id="search">
		<!-- Поиск по сайту -->
		</div>
		
		<div id="popular"><!-- Рекламируемые заголовки вверху -->
			<div id="popular1">
				<img src="<?php get_theme_url(); ?>/img/itd.png" alt="ITD lab." align="left" id="imgpop">
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
	</div>	
