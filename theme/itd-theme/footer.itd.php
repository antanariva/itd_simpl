<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } 
/****************************************************
*
* @File: 		footer.itd.php
* @Package:		GetSimple
* @Action:		ITD lab. theme for GetSimple CMS
*
*****************************************************/
?>

<footer>
	<div id="footer">
	<?php get_footer(); ?>
		<div class="left"><?php echo date('Y'); ?> <a href="<?php get_site_url(); ?>" ><?php get_site_name(); ?></a></div>
		<div class="right">Разработка сайта <a href="http://www.inteldata.ru" >ITD lab.</a> &middot; <?php get_site_credits(); ?></div>
	</div>
</footer>
	 
</body>
</html>