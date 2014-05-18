<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Scholarships extends EDUMONKS_Controller {
	private $_info = array();
	private $_type = "";
	public function index() {
		$this->_type = 'index';
		$datas = $this->_getDatas();
		$this->_setDatas($datas);
		$this->_view();
	}
	public function add() {
		//check admin permissions ..
		$this->_type = 'add';
		$datas = $this->_getDatas();
		$this->_setDatas($datas);
		$this->_view();
	}
	public function post() {
		$parameters = $this->input->post();
		$datas = $this->_getDatas();
		$this->load->service('scholarships_service');
		if($this->scholarships_service->addScholarship($parameters)) {
			$datas['add']['result_msg'] = 'DONE ! :)';
		} else {
			$datas['add']['result_msg'] = 'FAILED ! :(';
		}
		$this->_type = 'add';
		$this->_setDatas($datas);
		$this->_view();
	}
	private function _getDatas() {
		$this->load->service('scholarships_service');
		$datas['tabMenu']['scholarships'] = $this->scholarships_service->getScholarshipsList();
		return $datas;
	}
	private function _setDatas($datas) {
		$info = array(
	  "page_name" => "Edumonks Scholarships",
	  "page_type" => "Scholarships",
	  "is_login" => false,
	  "title" => "Edumonks Scholarships"
	  );
	  $this->layout->setPageInfo($info);
	  foreach($datas as $key => $value) {
	  	$this->_info[$key] = $value;
	  }
	}
	private function _view () {

		$layout['header'] = array('html_header');

		switch($this->_type) {
			case 'add' :
				$main = strtolower(__CLASS__).'/add';
				break;
			default :
				$main = strtolower(__CLASS__).'/main';
		}
		$layout['main'] = array(
		$main,
		strtolower(__CLASS__).'/side',
		strtolower(__CLASS__).'/footer');
		$layout['tabMenu'] = array('tabMenu');
		$layout['footer'] = array('html_footer');

		parent::setLayouts($layout);
		parent::display($this->_info);

	}
}
