<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class EDUMONKS_Service {

	public $CI = null;
	public function __construct() {
		$this->CI = & get_instance();
	}
	public function __get($key) {
		return $this->CI->$key;
	}
	/*
	 * return the scholarships data to be displayed in MENU
	 * it will be required for all pages and hence written in default service.
	 */
	public function getScholarshipsList() {
		$this->CI->load->model('scholarships_model');		
		$scholarships = $this->CI->scholarships_model->getScholarships();
		if(! is_array($scholarships)) {
			return array();
		}
		return $scholarships;
	}
}


?>