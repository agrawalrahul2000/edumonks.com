<?php

if(!function_exists('view_mode')) {
	function view_mode() {
		$CI = & get_instance();
		$CI->load->library('user_agent');
		if ($this->agent->is_smartphone) {
			return 'smart';
		} else {
			return 'pc';
		}

	}
}

?>