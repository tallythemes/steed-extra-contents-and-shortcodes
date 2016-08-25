<?php
class secasc_generate_settings{
	public $template_name;
	
	 function __construct( $template_name ){
		add_action( 'init', array($this, 'settings') );
		
		$this->template_name = $template_name;
	}
	
	function settings(){
		$api_file = secasc_get_api_files($this->template_name);
		$options = array();
		$sections = array();
		$option_id = 'steed_'.$this->template_name;
		
		
		if(is_array($api_file['items'])){
			foreach($api_file['items'] as $item){
				$section_id = $item['id'];
				
					$sections[] = array(
						"id"	=> $section_id,
						"title"	=> $item['title'],
					);
					
					/*option adding*/
					$options = secasc_section_option_sf($options, $section_id);
					
					$columns = $item['columns'];
					if(is_array($columns)){
						foreach($columns as $column){
							$column_id = $column['id'];
							$blocks = $column['blocks'];
								/*option adding*/
								$options = secasc_columns_option_sf($options, $section_id, $column_id, $column);
								if(is_array($blocks)){
									foreach($blocks as $block){
										$block_id = $block['id'];
											$block_function_name = $block['fn'];
											if(function_exists($block_function_name)){
												/*option adding*/
												$options = $block_function_name($options, $section_id, $column_id, $block_id);
											}
										}
									}
								
							
						
					}
				}
				
			}
		}
		
		if ( is_admin() && function_exists( 'ot_register_settings' ) ) {
			 ot_register_settings( 
				array(
					array(
						'id'	=> $option_id,
						'pages'	=> array(
							array(
								'id'	=> $option_id,
								'parent_slug'     => 'themes.php',
								'page_title'      => $api_file['page_title'],
								'menu_title'      => $api_file['menu_title'],
								'capability'      => 'edit_theme_options',
								'menu_slug'       => $api_file['menu_slug'],
								'icon_url'        => null,
								'position'        => null,
								'updated_message' => $api_file['menu_title'].' updated.',
								'reset_message'   => $api_file['menu_title'].' reset.',
								'button_text'     => 'Save Changes',
								'show_buttons'    => true,
								'screen_icon'     => 'options-general',
								'contextual_help' => null,
								'sections'        => $sections,
								'settings'        => $options,
							)
						)
					)
				)
			 );
		}
	}
	
}

new secasc_generate_settings('home');