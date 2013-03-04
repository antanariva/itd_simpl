<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
* @File: 		rightcolumn.itd.php
* @Action:		ITD lab. theme for GetSimple CMS
* @Autor:       Antanariva, Yekaterinburg, Russia
*****************************************************/
?>
<div id="submenu" align="right"><!-- Подменю сайтас сверху -->
	<a href="news.html" title="Новые публикации" alt="Новые публикации">Новые публикации</a>&nbsp;|&nbsp;<a href="med.html" title="Медицина" alt="Медицина">Медицина</a>&nbsp;|&nbsp;<a href="it.html" title="IT-технологии" alt="IT-технологии">IT-технологии</a>&nbsp;|&nbsp;<a href="civ.html" title="Цивилизация. XXI век" alt="Цивилизация. XXI век">Цивилизация. XXI век</a>&nbsp;|&nbsp;<a href="gallery.html" title="Фото и видео галереи" alt="Фото и видео галереи">Фото и видео</a>&nbsp;|&nbsp;<a href="autors.html" title="Об авторах" alt="Об авторах">Об авторах</a>
</div>
	
<aside>  
	<div id="news"><!-- Правый блок ещё с чем-нибудь -->
	<nav>
	    <?php get_i18n_navigation(return_page_slug(),1,99); ?>
	</nav>
    </div>
</aside>

<aside>  
	<div id="news"><!-- Правый блок с новыми статьями -->
	     <?php get_component('sidebar');	?>
    </div>
</aside>

<div class="breadcrumbs">
  <a href="<?php echo find_url('index',null); ?>">Главная</a>
  <?php get_i18n_breadcrumbs(return_page_slug()); ?>
</div>

