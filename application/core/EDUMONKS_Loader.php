<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class EDUMONKS_Loader extends CI_Loader {

	public function __construct() {
		parent::__construct();
		$this->_ci_service_paths = array(APPPATH,);
	}

	public function service($service, $name = '') {
		if(is_array($service)) {
			foreach($service as $babe) {
				$this->service($babe);
			}
			return;
		}

		if($service == '') {
			return;
		}

		$path = '';
		if($last_slash = strpos($service, '/') != FALSE) {
			$path = substr($service, 0, $last_slash + 1);
			$service = substr($service , $last_slash + 1);
		}
		
		
		if($name == '') {
			$name = $service;
		}
		if(in_array($name, $this->_ci_service_paths, TRUE)) {
			return;
		}
		
		$CI = & get_instance();
		$service = strtolower($service);
		
		foreach($this->_ci_service_paths as $service_path) {
			if(!file_exists($service_path.'services/'.$path.$service.EXT)) {
				continue;
			}
			if(!class_exists('EDUMONKS_Service')) {
				require(APPPATH . 'core/EDUMONKS_Service'.EXT);
			}
			require_once ($service_path.'services/'.$path.$service.EXT);
			$service = ucfirst($service);
			$CI->$name = new $service();
			$this->_ci_service_paths[] = $name;
			return;
		}
		

	}
}


?>