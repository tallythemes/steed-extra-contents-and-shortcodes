<?php
if(!function_exists('secasc_columns_option_sf')):
	function secasc_columns_option_sf($options, $section_id, $column_id, $column ){
		$prefix = $section_id.'_'.$column_id.'_';
		$options[] = array(
			'id'          => $prefix.'_tab',
			'label'       => $column['title'],
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