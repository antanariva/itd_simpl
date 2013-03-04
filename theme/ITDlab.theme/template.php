<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			template.php
* @Package:		GetSimple
* @Action:		Innovation theme for GetSimple CMS
*
*****************************************************/

# Get this theme's settings based on what was entered within its plugin. 
# This function is in functions.php 
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
		
		<div id="left" class="column"><p>левая колонка</p></div>
	    
		<div id="right" class="column"><p>правая колонка</p></div>  
				
	</div>

	
<!-- include the footer template -->
<?php include('footer.itd.php'); ?>