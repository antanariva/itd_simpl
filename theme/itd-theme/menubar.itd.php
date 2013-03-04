<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		menubar.itd.php
* @Package:		GetSimple
* @Action:		ITD lab. theme for GetSimple CMS
*
*****************************************************/
?>

<aside> 
    <div id="menubar">

	<!-- main navigation -->
				<nav id="main-nav">
					<ul>
						<?php get_nested_navigation(); ?>
					</ul>
				</nav>
	
	<!-- wrap each sidebar section like this -->
	<div class="section">
		<?php get_component('sidebar');	?>
	</div>
    </div>
</aside>