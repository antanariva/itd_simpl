<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		ITD lab. theme for GetSimple CMS
*
*****************************************************/
# Сначала грузим боковую панель с меню. Только потом хэдер!
include('menubar.itd.php'); ?>

<!-- include the header template -->
<?php include('header.itd.php'); ?>

<!-- socialmedia -->
<div class="section" id="socialmedia" >
	<h2>Connect</h2>
</div>


<article>
	<section>
		<!-- title and content -->
		<h1><?php get_page_title(); ?></h1>
	    <?php get_page_content(); ?>
			
	<p>Published on <time datetime="<?php get_page_date('Y-m-d'); ?>" pubdate><?php get_page_date('F jS, Y'); ?></time></p>
	</section>	
</article>				

<!-- include the footer template -->
<?php include('footer.itd.php'); ?>