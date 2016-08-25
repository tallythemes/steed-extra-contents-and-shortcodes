<?php
class secasc_generate_content{
	public $template_name;
	public $options;
	
	 function __construct( $template_name ){		
		$this->template_name = $template_name;
		$option_id = 'steed_'.$this->template_name;
		$this->options = get_option($option_id);
		$this->content();
	}
	
	function content(){
		$api_file = secasc_get_api_files($this->template_name);
		$sections = array();
		
		if(is_array($api_file['items'])){
			foreach($api_file['items'] as $item){
				$section_id = $item['id'];
				if($this->is_section_active($section_id)){
					
				}//Section check IF
												
			}//Section Loop
		}//Main IF
		
	}
	
	function is_section_active($section_id){
		$options = $this->options;
		$value = true;
		
		if(isset($options[$section_id])){
			if($options[$section_id] == 'off'){
				$value = false;
			}
		}
		
		return $value;
	}
	
}

new secasc_generate_content('home');