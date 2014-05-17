<?php

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