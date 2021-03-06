<?php 
/**
 * Load Tab Plugin
 *
 * Displays the plugin file passed to it 
 *
 * @package GetSimple
 * @subpackage Plugins
 */

# Setup inclusions
$load['plugin'] = true;
include('inc/common.php');
login_cookie_check();

# verify a plugin was passed to this page
if (!isset($_GET['id'])) {
	redirect('plugins.php');
}

# Setup this plugin
$plugin_id = $_GET['id'];
global $plugin_info;

get_template('header', cl($SITENAME).' &raquo; '. $plugin_info[$plugin_id]['name']); 
 
?>
	
<?php include('template/include-nav.php'); ?>

<div class="bodycontent clearfix">
	
	<div id="maincontent">
		<div class="main">
		<?php 
			if ($plugin_id == @$_GET['item'])	{
				call_user_func_array($plugin_info[$plugin_id]['load_data'],array());
			}	else if (isset($_GET['item'])) {
				call_user_func_array($_GET['item'],array());
			}
		?>
		</div>
	</div>
	
	<div id="sidebar" >
		<ul class="snav">
			<?php exec_action($plugin_id."-sidebar"); ?>
		</ul>
		<?php exec_action($plugin_id."-sidebar-extra"); ?>
	</div>	

</div>
<?php get_template('footer'); ?>
