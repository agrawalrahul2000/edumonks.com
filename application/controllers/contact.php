<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends EDUMONKS_Controller {
	private $_info = array();

	public function index() {
		$datas = $this->_getDatas();
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
	  "page_name" => "Edumonks Contact Us",
	  "page_type" => "Contact Us",
	  "is_login" => false,
	  "title" => "Edumonks Contact Us"
	  );
	  $this->layout->setPageInfo($info);
	  foreach($datas as $key => $value) {
	  	$this->_info[$key] = $value;
	  }
	}
	private function _view () {

		$layout['header'] = array('html_header');
		$layout['main'] = array(
		strtolower(__CLASS__).'/main'
		);
		$layout['rnavi'] = array(
		strtolower(__CLASS__).'/side'
		);
		$layout['tabMenu'] = array('tabMenu');
		$layout['footer'] = array('html_footer');

		parent::setLayouts($layout);
		parent::display($this->_info);

	}
}
