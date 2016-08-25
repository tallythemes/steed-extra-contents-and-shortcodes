<?php
if(!function_exists('secasc_cf_section_after')):
	function secasc_cf_section_before($arg){
		$cf = array_merge(array(
			'after' => '',
		), $arg);
		
			echo '</div">';
		echo '</section>';
		echo $cf['after'];	
	}
endif;