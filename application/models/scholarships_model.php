<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Scholarships_Model extends EDUMONKS_Model {

	const TABLE_NAME = 'scholarships';
	public function __construct() {
		parent::__construct();
	}

	public function getScholarships() {
		$query = $this->db_slave->get(self::TABLE_NAME);
		return (array)$query->result_array();
	}
}


?>