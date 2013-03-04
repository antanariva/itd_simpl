<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
* @File: 		templates.itd.php
* @Action:		ITD lab. theme for GetSimple CMS
* @Autor:       Antanariva, Yekaterinburg, Russia
*****************************************************/

# This function is in functions.php (Get from Innovation Theme)
Innovation_Settings();

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
					
					<!-- page footer -->
					<div class="footer">
						<p>Published on <time datetime="<?php get_page_date('Y-m-d'); ?>" pubdate><?php get_page_date('F jS, Y'); ?></time></p>
					</div>
				</section>			
			</article>
		</div>
		
	<div id="left" class="column"><?php include('leftcolumn.itd.php'); ?></div>
	    
	<div id="right" class="column"><?php include('rightcolumn.itd.php'); ?></div>  
				
</div>

	
<!-- include the footer template -->
<?php include('footer.itd.php'); ?>