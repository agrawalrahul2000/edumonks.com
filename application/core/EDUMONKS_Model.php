<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class EDUMONKS_Model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->_getDbConn();
	}

	private function _getDbConn() {
		$CI = & get_instance();
		if(isset($CI->db_master) && isset($CI->db_slave)) {
			return;
		} else {
			$CI->db_master = $this->load->database('master',TRUE);
			$CI->db_slave = $this->load->database('slave',TRUE);
			if($CI->db_slave->conn_id = FALSE) {
				$CI->db_slave = $this->load->database('master',TRUE);
			}
		}
	}

}


?>