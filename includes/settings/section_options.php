<?php
if(!function_exists('secasc_section_option_sf')):
	function secasc_section_option_sf($options, $section_id){
		$prefix = $section_id.'_';
		
		$options[] = array(
			'id'          => $prefix.'tab',
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
		
		$options[] = array(
			'id'          => $prefix.'active',
			'label'       => 'Enable This Section',
			'desc'        => '',
			'std'         => '',
			'type'        => 'on_off',
			'section'     => $section_id,
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		);
		$options[] = array(
			'id'          => $prefix.'title',
			'label'       => 'Section Title',
			'desc'        => '',
			'std'         => '',
			'type'        => 'text',
			'section'     => $section_id,
			'rows'        => '5',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		);
		$options[] = array(
			'id'          => $prefix.'des',
			'label'       => 'Section Description',
			'desc'        => '',
			'std'         => '',
			'type'        => 'textarea-simple',
			'section'     => $section_id,
			'rows'        => '5',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		);
		$options[] = array(
			'id'          => $prefix.'padding_top',
			'label'       => 'Top Padding',
			'desc'        => '',
			'std'         => '',
			'type'        => 'text',
			'section'     => $section_id,
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		);
		$options[] = array(
			'id'          => $prefix.'padding_bottom',
			'label'       => 'Bottom Padding',
			'desc'        => '',
			'std'         => '',
			'type'        => 'text',
			'section'     => $section_id,
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		);
		$options[] = array(
			'id'          => $prefix.'bg',
			'label'       => 'Background',
			'desc'        => '',
			'std'         => '',
			'type'        => 'background',
			'section'     => $section_id,
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		);
		
		$options[] = array(
			'id'          => $prefix.'css_class',
			'label'       => 'CSS Class',
			'desc'        => '',
			'std'         => '',
			'type'        => 'text',
			'section'     => $section_id,
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		);
		$options[] = array(
			'id'          => $prefix.'div_id',
			'label'       => 'Div ID',
			'desc'        => '',
			'std'         => '',
			'type'        => 'text',
			'section'     => $section_id,
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		);
		
		$options[] = array(
			'id'          => $prefix.'bg_type',
			'label'       => 'Background Type',
			'desc'        => '',
			'std'         => '',
			'type'        => 'select',
			'section'     => $section_id,
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and',
			'choices'     => array( 
				array(
					'value'       => 'light',
					'label'       => 'Light',
				),
				array(
					'value'       => 'dark',
					'label'       => 'Dark',
				),
			)
		);
		
		$options[] = array(
			'id'          => $prefix.'content_width',
			'label'       => 'Content Width',
			'desc'        => '',
			'std'         => '',
			'type'        => 'text',
			'section'     => $section_id,
			'rows'        => '5',
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