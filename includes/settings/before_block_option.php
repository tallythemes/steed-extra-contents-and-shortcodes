<?php
if(!function_exists('secasc_section_option_sf')):
	function secasc_section_option_sf($options, $section_id, $column_id, $block_id){
		
		$options[] = array(
			'id'          => $section_id.'_tab',
			'label'       => 'Section Settings',
			'desc'        => '',
			'std'         => '',
			'type'        => 'tab',
			'section'     => $section_id,
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		);
		
		return $options;
	}
endif;