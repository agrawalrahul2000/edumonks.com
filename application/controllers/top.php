<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Top extends EDUMONKS_Controller {
	public function index() {
		$this->setDatas();
	}
	public function setDatas() {
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
