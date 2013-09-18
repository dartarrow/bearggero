<?php
/*  
Theme Name:Bearggero 
Theme URI: http://www.flatpress.org/
Description: Inspired by leggero. Larger fonts, focus on separation in blog entries, and anchored sytlized dynamic menus.
Version: 0.800
Author: Darren Guinness & Alvin Jude
Author URI: http://www.flatpress.org/
*/


	$theme['name'] = 'Bearggero';
	$theme['author'] = 'Darren Guinness & Alvin Jude';
	$theme['www'] = 'http://www.flatpress.org/';
	$theme['description'] = 'New Theme inspired by the classic leggero style';
	
	
	$theme['version'] = 0.800;
		
	$theme['style_def'] = 'style.css';
	$theme['style_admin'] = 'admin.css';
	
	$theme['default_style'] = 'bearggero';


	$theme['default_style'] = 'bearggero';
	
	// Other theme settings
		// overrides default tabmenu
		// and panel layout
	remove_filter('admin_head', 'admin_head_action');
	
		// register widgetsets
	register_widgetset('right');
	register_widgetset('left'); 
	
?>
