<?php
/*  
Theme Name:Bearggero 
Theme URI://github.com/dartarrow/bearggero
Description:A new theme focused on contextual separation, readability and a nice colour pallete. Also works well on mobile devices.
: 
Version: 1.0
Author: Darren Guinness & Alvin Jude
Author URI: http://www.flatpress.org/
*/


	$theme['name'] = 'Bearggero';
	$theme['author'] = 'Darren Guinness & Alvin Jude';
	$theme['www'] = 'http://www.flatpress.org/';
	$theme['description'] = 'New Theme inspired by the classic leggero style';
	
	
	$theme['version'] = 1.0;
		
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
