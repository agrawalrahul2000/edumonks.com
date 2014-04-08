<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class EDUMONKS_Model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->_getDbConn();
	}
	
	private function _getDbConn() {
		$_CI = & get_instance();
		if(isset($_CI->de_master) && isset($_CI->db_slave)) {
			return;
		} else {
			$_CI->db_master = $this->load->database('master',TRUE);
			$_CI->db_slave = $this->load->database('slave',TRUE);
			if($_CI->db_slave->conn_id = FALSE) {
				$_CI->db_slave = $_CI->load->database('master',TRUE);
			}
		}
		
	}
}


?>