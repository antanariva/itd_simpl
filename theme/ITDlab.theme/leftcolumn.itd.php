<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
* @File: 		leftcolumn.itd.php
* @Action:		ITD lab. theme for GetSimple CMS
* @Autor:       Antanariva, Yekaterinburg, Russia
*****************************************************/
?>
	<!-- main navigation -->
	<nav id="main-nav">
		<ul>
			<?php get_navigation(get_page_slug(FALSE)); ?>
		</ul>
	</nav>
	
	<!-- wrap each sidebar section like this -->
	<div class="section">
		<?php get_component('tagline');	?>
	</div>
