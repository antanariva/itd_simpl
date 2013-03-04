<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } 
/****************************************************
* @File: 		footer.itd.php
* @Action:		ITD lab. theme for GetSimple CMS
* @Autor:       Antanariva, Yekaterinburg, Russia
*****************************************************/
?>

	<!-- site footer -->
    <div id="footer-wrapper"><!-- это нужно не всегда -->
	<div id="footer">
		<footer>
		<?php get_footer(); ?>

	 	<div class="wrapper">
			<div class="left"><?php echo date('Y'); ?> <a href="<?php get_site_url(); ?>" ><?php get_site_name(); ?></a></div>
			<div class="right">Разработано для сайта <a href="http://www.inteldata.ru" >ITD lab.</a> &middot; <?php get_site_credits(); ?></div>
		</div>
		</footer>
	</div>
	</div>
</body>
</html>