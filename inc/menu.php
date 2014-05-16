<?php

// SETTING UP THE PLUGIN MENU...

add_action('admin_menu', 'yourplugin_admin_menu');


function yourplugin_admin_menu() 
{
	$pluginName = "yourplugin";
	add_menu_page('Your Plugin', 'Your Plugin', 'manage_options', $pluginName . '-dashboard', $pluginName . '_dashboard', 'https://cdn4.iconfinder.com/data/icons/humility-icons-MERGE/16x16/apps/control-center2.png');	
}

?>