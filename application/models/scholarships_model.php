<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Scholarships_Model extends EDUMONKS_Model {

	const TABLE_NAME = 'scholarships';
	public function __construct() {
		parent::__construct();
	}

	public function getScholarships() {
		$query = $this->db_slave->get(self::TABLE_NAME);
		return $query->result_array();
	}

	public function insertScholarship($params) {
		$params['enabled_flg'] = 1;
		$params['insert_datetime'] = date('Y-m-d H:i:s');
		$params['update_datetime'] = date('Y-m-d H:i:s');

		return $this->db_slave->insert(self::TABLE_NAME,$params);
	}
}


?>