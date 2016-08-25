<?php
if(!function_exists('secasc_slideshow_option_sf')):
	function secasc_slideshow_option_sf($options, $section_id, $column_id, $block_id){
		$prefix = $section_id.'_'.$column_id.'_'.$block_id.'_';
		
		$options[] = array(
			'id'          => $prefix.'block',
			'label'       => '',
			'desc'        => '<h2 style="background:#000; color:#fff; line-height: 50px; text-align: center; font-size:20px;">Slideshow</h2>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => $section_id,
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'condition'   => '',
			'settings'    => '',
		);
		
		$options[] = array(
			'id'          => $prefix.'active',
			'label'       => 'Enable Slideshow',
			'desc'        => '',
			'std'         => '',
			'type'        => 'on_off',
			'section'     => $section_id,
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'condition'   => '',
			'settings'    => '',
		);
		
		$options[] = array(
			'id'          => $prefix.'items',
			'label'       => 'Slider Items',
			'desc'        => '',
			'std'         => '',
			'type'        => 'list-item',
			'section'     => $section_id,
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and',
			'settings'    => array( 
				array(
					'id'          => 'text',
					'label'       => 'Description',
					'desc'        => '',
					'std'         => '',
					'type'        => 'textarea-simple',
					'rows'        => '10',
					'post_type'   => '',
					'taxonomy'    => '',
					'min_max_step'=> '',
					'class'       => '',
					'condition'   => '',
					'operator'    => 'and'
				),
				array(
					'id'          => 'image',
					'label'       => 'Image',
					'desc'        => '',
					'std'         => '',
					'type'        => 'upload',
					'rows'        => '10',
					'post_type'   => '',
					'taxonomy'    => '',
					'min_max_step'=> '',
					'class'       => '',
					'condition'   => '',
					'operator'    => 'and'
				),
				array(
					'id'          => 'overlay',
					'label'       => 'Background Overlay Color',
					'desc'        => '',
					'std'         => '',
					'type'        => 'colorpicker-opacity',
					'rows'        => '10',
					'post_type'   => '',
					'taxonomy'    => '',
					'min_max_step'=> '',
					'class'       => '',
					'condition'   => '',
					'operator'    => 'and'
				),
				array(
					'id'          => 'button1_link',
					'label'       => 'Button #1 link',
					'desc'        => '',
					'std'         => '',
					'type'        => 'text',
					'rows'        => '10',
					'post_type'   => '',
					'taxonomy'    => '',
					'min_max_step'=> '',
					'class'       => '',
					'condition'   => '',
					'operator'    => 'and'
				),
				array(
					'id'          => 'button1_text',
					'label'       => 'Button #1 Text',
					'desc'        => '',
					'std'         => '',
					'type'        => 'text',
					'rows'        => '10',
					'post_type'   => '',
					'taxonomy'    => '',
					'min_max_step'=> '',
					'class'       => '',
					'condition'   => '',
					'operator'    => 'and'
				),
				array(
					'id'          => 'button2_link',
					'label'       => 'Button #2 link',
					'desc'        => '',
					'std'         => '',
					'type'        => 'text',
					'rows'        => '10',
					'post_type'   => '',
					'taxonomy'    => '',
					'min_max_step'=> '',
					'class'       => '',
					'condition'   => '',
					'operator'    => 'and'
				),
				array(
					'id'          => 'button2_text',
					'label'       => 'Button #2 Text',
					'desc'        => '',
					'std'         => '',
					'type'        => 'text',
					'rows'        => '10',
					'post_type'   => '',
					'taxonomy'    => '',
					'min_max_step'=> '',
					'class'       => '',
					'condition'   => '',
					'operator'    => 'and'
				),
				
				array(
					'id'          => 'title_color',
					'label'       => 'Title Color',
					'desc'        => '',
					'std'         => '',
					'type'        => 'colorpicker',
					'rows'        => '10',
					'post_type'   => '',
					'taxonomy'    => '',
					'min_max_step'=> '',
					'class'       => '',
					'condition'   => '',
					'operator'    => 'and'
				),
				array(
					'id'          => 'text_color',
					'label'       => 'Text Color',
					'desc'        => '',
					'std'         => '',
					'type'        => 'colorpicker',
					'rows'        => '10',
					'post_type'   => '',
					'taxonomy'    => '',
					'min_max_step'=> '',
					'class'       => '',
					'condition'   => '',
					'operator'    => 'and'
				),
				array(
					'id'          => 'button1_color',
					'label'       => 'Button #1 Color',
					'desc'        => '',
					'std'         => '',
					'type'        => 'select',
	
					'rows'        => '10',
					'post_type'   => '',
					'taxonomy'    => '',
					'min_max_step'=> '',
					'class'       => '',
					'condition'   => '',
					'operator'    => 'and',
					'choices'     => array( 
						array(
							'value'       => 'primary',
							'label'       => 'Primary',
						),
						array(
							'value'       => 'accent',
							'label'       => 'Accent',
						),
						array(
							'value'       => 'light',
							'label'       => 'Light',
						),
						array(
							'value'       => 'dark',
							'label'       => 'Dark',
						),
					)
				),
				array(
					'id'          => 'button2_color',
					'label'       => 'Button #2 Color',
					'desc'        => '',
					'std'         => '',
					'type'        => 'select',
					'rows'        => '10',
					'post_type'   => '',
					'taxonomy'    => '',
					'min_max_step'=> '',
					'class'       => '',
					'condition'   => '',
					'operator'    => 'and',
					'choices'     => array( 
						array(
							'value'       => 'primary',
							'label'       => 'Primary',
						),
						array(
							'value'       => 'accent',
							'label'       => 'Accent',
						),
						array(
							'value'       => 'light',
							'label'       => 'Light',
						),
						array(
							'value'       => 'dark',
							'label'       => 'Dark',
						),
					)
				),
				
			)
		);
		
		$options[] = array(
			'id'          => $prefix.'enable_animation',
			'label'       => 'Enable Animation',
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
			'id'          => $prefix.'animateIn',
			'label'       => 'AnimateIn',
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
		$stag_option[] = array(
			'id'          => $prefix.'animateOut',
			'label'       => 'AnimateIn',
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
	
		return $options;
	}
endif;