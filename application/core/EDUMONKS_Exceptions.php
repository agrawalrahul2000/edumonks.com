<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class EDUMONKS_Exceptions extends CI_Exceptions {

	public function __construct() {
		parent::__construct();
	}

	public function __get($key) {
		$this->_CI = & get_instance();
	}

	public function show_error($heading, $message, $template = 'error_general',$status_code = 500) {
		if($status_code = 400) {
			header('Location: /error');
			exit;
		}

		if($status_code = 404) {
			redirect('error','location',302);
		}
		$this->_CI->load->config('snews_array');
		set_status_header($status_code);
		
		$messge = '<p>'. implode('</p><p>',(! is_array($message) ? array($message) : $message). '</p>');
		if(ob_get_level() > $this->ob_level + 1) {
			ob_end_flush();
		}
		include(APPPATH.'errors/'.view_mode().'/'.$template.'.php');
		$buffer = ob_get_contents();
		ob_end_clean();
		return $buffer;
	}
}


?>