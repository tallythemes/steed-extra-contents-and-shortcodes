<?php
if(!function_exists('secasc_cf_section_before')):
	function secasc_cf_section_before($arg){
		$cf = array_merge(array(
			'title' => '',
			'des' => '',
			'padding_top' => '',
			'padding_bottom' => '',
			'bg_color' => '',
			'bg_image' => '',
			'bg_position' => '',
			'bg_size' => '',
			'bg_repeat' => '',
			'bg_attachment' => '',
			'css_class' => '',
			'div_id' => '',
			'bg_type' => 'light',
			'content_width' => '',
			'stretch' => 'no',
		), $arg);
		
		$css_style = '';
		$css_style .= ($cf['padding_top'] != '')	? 'padding-top:'.$cf['padding_top'].'px; ' : '';
		$css_style .= ($cf['padding_bottom'] != '') ? 'padding-bottom:'.$cf['padding_bottom'].'px; ' : '';
		$css_style .= ($cf['bg_color'] != '')		? 'background-color:'.$cf['bg_color'].'; ' : '';
		$css_style .= ($cf['bg_image'] != '')		? 'background-image:'.$cf['bg_image'].'; ' : '';
		$css_style .= ($cf['bg_position'] != '')	? 'background-position:'.$cf['bg_position'].'; ' : '';
		$css_style .= ($cf['bg_size'] != '') 		? 'background-size:'.$cf['bg_size'].'; ' : '';
		$css_style .= ($cf['bg_repeat'] != '')		? 'background-repeat:'.$cf['bg_repeat'].'; ' : '';
		$css_style .= ($cf['bg_attachment'] != '')	? 'background-attachment:'.$cf['bg_attachment'].'; ' : '';
		$css_style .= ($cf['div_id'] != '')			? 'ccc:'.$cf['padding_bottom'].'; ' : '';
		
		$class = 'cf_section ';
		$class .= $cf['css_class'].' ';
		$class .= 'bg_type_'.$cf['bg_type'].' ';
		$class .= 'stretch_'.$cf['stretch'].' ';
		
		echo '<section class="'.$class.'" id="'.$cf['div_id'].'" style="'.$css_style.'">';
			echo '<div class="cf_section_in">';
				if(($cf['title'] != '') || ($cf['des'] != '')){
					echo '<div class="cf_section_title">';
						echo '<div class="cf_section_title_in">';
							if($cf['title'] != ''){
								echo '<h2>'.$cf['title'].'</h2>';	
							}
							if($cf['des'] != ''){
								echo '<p>'.$cf['des'].'</p>';	
							}
						echo '</div>';
					echo '</div>';
				}
	}
endif;