<?php
function secasc_get_api_files($name){
	
	$theme = get_template_directory().'/secasc/'.$name.'.php';
	$child = get_stylesheet_directory().'/secasc/'.$name.'.php';
	if(!empty($name)){
		if(file_exists($child)){
			return include($child);
		}elseif(file_exists($theme)){
			return include($theme);
		}
	}
}