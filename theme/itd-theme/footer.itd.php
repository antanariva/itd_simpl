<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } 
/****************************************************
*
* @File: 		footer.itd.php
* @Package:		GetSimple
* @Action:		ITD lab. theme for GetSimple CMS
*
*****************************************************/
?>

	<!-- site footer -->
	<footer class="clearfix" >
		
		<?php get_footer(); ?>
		
		<!-- 
			Theme Credits
			Please consider keeping the links to the developer and GetSimple if you use this theme
		-->

			<div class="left"><?php echo date('Y'); ?> <a href="<?php get_site_url(); ?>" ><?php get_site_name(); ?></a></div>
			<div class="right">Разработка сайта <a href="http://www.inteldata.ru" >ITD lab.</a> &middot; <?php get_site_credits(); ?></div>

	</footer>
	 
</body>
</html>