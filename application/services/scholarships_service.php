<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Scholarships_service extends EDUMONKS_Service {


	public function addScholarship($params) {
		$this->load->model('scholarships_model');
		return $this->scholarships_model->insertScholarship($params);
	}

}


?>