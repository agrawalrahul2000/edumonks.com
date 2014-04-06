<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class EDUMONKS_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function setLayouts($layouts) {
		if(isset($layouts['header']) && is_array($layouts['header']) && count($layouts['header'])) {
			$this->layout->setHeaderLayout($layouts['header']);
		}

		if(isset($layouts['footer']) && is_array($layouts['footer'])&& count($layouts['footer'])) {
			$this->layout->setFooterLayout($layouts['footer']);
		}

		if(isset($layouts['main']) && is_array($layouts['main']) && count($layouts['main'])) {
			$this->layout->setMainLayout($layouts['main']);
		}

		if(isset($layouts['tabMenu']) && is_array($layouts['tabMenu']) && count($layouts['tabMenu'])) {
			$this->layout->setTabMenuLayout($layouts['tabMenu']);
		}

		if(isset($layouts['rnavi']) && is_array($layouts['rnavi']) && count($layouts['rnavi'])) {
			$this->layout->setRnaviLayout($layouts['rnavi']);
		}
	}
	public function display($datas,$responseType = '',$layouts = 'default_html_view',$viewMode = '') {
		$this->layout->view($datas,$responseType,$layouts,$viewMode);
	}
}


?>