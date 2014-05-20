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

if(! function_exists('escapeHtml')) {
	function escapeHtml($target) {
		if(is_array($target)) {
			$result = array();
			foreach($target as $key => $value) {
				$result[$key] = escapeHtml($target[$key]);
			}
		} else {
			$result = $target;
			$result = htmlspecialchars($result,ENT_QUOTES);
		}
		return $result;
	}
}

?>