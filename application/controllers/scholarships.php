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

	public function my() {
		$this->_type = 'my';
		$datas = $this->_getDatas();
		$this->_setDatas($datas);
		$this->_view();
	}

	public function all() {
		$this->_type = 'all';
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
	  "is_login" => false,
	  "title" => "Edumonks Scholarships"
	  );
	  switch($this->_type) {
	  	case 'my':
	  		$info['page_type'] = "My Scholarships";
	  		break;
	  	case 'all':
	  		$info['page_type'] = "All Scholarships";
	  		break;
	  	case 'add':
	  		$info['page_type'] = "Add Scholarship";
	  		break;
	  	default :
	  		$info['page_type'] = "Scholarship";
	  		break;
	  }
	  $this->layout->setPageInfo($info);
	  foreach($datas as $key => $value) {
	  	$this->_info[$key] = $value;
	  }
	}

	private function _view () {
		switch($this->_type) {
			case 'my' :
				$main = array(
				'breadcrums',
				'pankuz',
				strtolower(__CLASS__).'/my_description',
				strtolower(__CLASS__).'/my_content'
				);
				break;
			case 'all' :
				$main = array(
				'breadcrums',
				'pankuz',
				strtolower(__CLASS__).'/all_tabmenu',
				strtolower(__CLASS__).'/all_content'
				);
				break;
			case 'add' :
				$main = array(strtolower(__CLASS__).'/add');
				break;
			default :
				$main = array(
				'breadcrums',
				'pankuz',
				strtolower(__CLASS__).'/index_content',
				strtolower(__CLASS__).'/index_menu');
		}
		$layout['header'] = array('html_header');
		$layout['main'] = $main;
		if($this->_type == 'all' || $this->_type == 'my') {
			$layout['rnavi'] = array();
		} else {

			$layout['rnavi'] = array(
		'side/announcements',
		'side/not_registered_notice',
		'side/invitation_panel',
		'side/let_us_know_panel',
			);

		}
		$layout['tabMenu'] = array('tabMenu');
		$layout['footer'] = array('html_footer');

		parent::setLayouts($layout);
		parent::display($this->_info);

	}
}
