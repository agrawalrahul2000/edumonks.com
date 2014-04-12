<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Top extends EDUMONKS_Controller {
	public function index() {
		$datas = $this->_getDatas();
		$this->_setDatas($datas);
	}
	private function _getDatas() {
      $this->load->service('top_service');
      $datas['scholarships'] = $this->top_service->getScholarshipsList();
      $datas = $this->top_service->getDatas();
	}
	private function _setDatas($datas) {
		$layout['header'] = array('html_header');
		$layout['main'] = array(
		'top/main',
		'top/side',
		'top/footer');
		$layout['tabMenu'] = array('tabMenu');
		$layout['footer'] = array('html_footer');

		parent::setLayouts($layout);
		parent::display(array());
	}
}
