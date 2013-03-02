<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		rightbar.itd.php
* @Package:		GetSimple
* @Action:		ITD lab. theme for GetSimple CMS
*
*****************************************************/
?>

<div id="rightbar">
	<aside><!-- Блок для новых публикаций -->
		<?php get_component('newpub'); ?>
	</aside>
	
	<aside><!-- Блок "Хозяйке на заметку -->
		<?php get_component('fixed'); ?>
    </aside>
</div>
