<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class EDUMONKS_Service extends CI_Service {

	public function __construct() {
		parent::__construct();
	}
	
	private function __get($key) {
		$CI = & get_instance();
		return $CI->$key;
	}
}


?>