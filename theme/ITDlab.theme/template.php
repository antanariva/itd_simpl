<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
* @File: 		templates.itd.php
* @Action:		ITD lab. theme for GetSimple CMS
* @Autor:       Antanariva, Yekaterinburg, Russia
*****************************************************/
include('header.itd.php'); 
?>
	
<div id="container">
	<div id="center" class="column">
			<!-- page content -->
			<article>
				<section>				
				<!-- title and content -->
				<h1><?php get_page_title(); ?></h1>
				<?php get_page_content(); ?>
				
				<!-- Время публикации -->
				<p>Опубликованно <time datetime="<?php get_page_date('Y-m-d'); ?>" pubdate><?php get_page_date('F jS, Y'); ?></time></p>
				
				<!-- Кнопки Pulso -->		
				<div class='pluso pluso-theme-color' style='background:#eaeaea;'><div class='pluso-more-container'><a class='pluso-more' href=''></a><ul class='pluso-counter-container'><li></li><li class='pluso-counter'></li><li></li></ul></div><a class='pluso-vkontakte'></a><a class='pluso-facebook'></a><a class='pluso-odnoklassniki'></a><a class='pluso-moimir'></a><a class='pluso-twitter'></a><a class='pluso-google'></a><a class='pluso-yandex'></a><a class='pluso-evernote'></a><a class='pluso-livejournal'></a><a class='pluso-liveinternet'></a></div>
					<script type='text/javascript'>if(!window.pluso){pluso={version:'0.9.2',url:'http://share.pluso.ru/'};h=document.getElementsByTagName('head')[0];l=document.createElement('link');l.href=pluso.url+'pluso.css';l.type='text/css';l.rel='stylesheet';s=document.createElement('script');s.charset='UTF-8';s.src=pluso.url+'pluso.js';h.appendChild(l);h.appendChild(s)}</script>
				</section>			
			</article>
			<div class="breadcrumbs">
				<a href="<?php echo find_url('/',null); ?>">INTELDATA.RU</a>
				<b><?php get_i18n_breadcrumbs(return_page_slug()); ?></b>
			</div>
		</div>
		
	<div id="left" class="column"><?php include('leftcolumn.itd.php'); ?></div>
	    
	<div id="right" class="column"><?php include('rightcolumn.itd.php'); ?></div>  
				
</div>

	
<!-- include the footer template -->
<?php include('footer.itd.php'); ?>