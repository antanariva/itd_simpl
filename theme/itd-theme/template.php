<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		ITD lab. theme for GetSimple CMS
*
*****************************************************/
# сначала грузим шапку сайта
include('header.itd.php'); ?>

<div id="container">
<div id="center" class="column">
	<!-- Собственно материал статьи -->
	<article>
		<section>
			<h1><?php get_page_title(); ?></h1>
			<?php get_page_content(); ?>
		<p>Published on <time datetime="<?php get_page_date('Y-m-d'); ?>" pubdate><?php get_page_date('F jS, Y'); ?></time></p>
		</section>	
	</article>				
</div>
</div>

<div id="left" class="column">
	<!-- Подгружаем файл для заполнения левой колонки (там основное меню сайта)-->
	<?php include('menubar.itd.php'); ?>
</div>
<div id="right" class="column">
	<!-- Подгружаем файл для заполнения правой колонки -->
	<?php include('rightbar.itd.php'); ?>
</div>

<!-- Подгружаем файл футера -->
<?php include('footer.itd.php'); ?>