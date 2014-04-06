<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Layout {
	private $_CI = null;
	private $_page_info = array();
	private $_css = array();
	private $_js = array();
	private $_layouts = array(
	     "header" => array(),
	     "tabMenu" =>array(),
	     "main"   => array(),
	     "rnavi"  => array(),
	     "footer" => array()
	);

	public function __construct() {
		$this->_CI = & get_instance();
	}

	public function setPageInfo($pageInfo) {
		$this->_page_info = $pageInfo;
	}

	public function getPageInfo() {
		return $this->_page_info;
	}

	public function setCssList($css) {
		if(!is_array($css)) {
			$css = array($css);
		}

		foreach($css as $key => $value) {
			$this->_css[] = $value;
		}
	}

	public function getCssList() {
		$this->_css;
	}
	public function setJsList($js) {
		if(!is_array($js)) {
			$js = array($js);
		}

		foreach($js as $key => $value) {
			$this->_js[] = $value;
		}
	}

	public function getJsList() {
		return $this->_js;
	}
	public function setHeaderLayout($components) {
		if(count($components)) {
			$this->_layouts['header'] = $components;
		}
	}
	public function getLayouts($part = "header") {
		return $this->_layouts[$part];
	}

	public function setTabMenuLayout($components) {
		if(count($components)) {
			$this->_layouts['tabMenu'] = $components;
		}
	}

	public function setMainLayout($components) {
		if(count($components)) {
			$this->_layouts['main'] = $components;
		}
	}

	public function setFooterLayout($components) {
		if(count($components)) {
			$this->_layouts['footer'] = $components;
		}
	}

	public function setRnaviLayout($components) {
		if(count($components)) {
			$this->_layouts['rnavi'] = $components;
		}
	}

	public function view($data,$responseType,$layout = 'default_html_view',$viewMode = "pc") {
		switch($responseType) {
			case 'html' :
			default:
				$this->_viewHtml($data,$layout,$viewMode);
		}
	}

	private function _viewHtml($datas,$layout = 'default_html_view',$viewMode) {
		$this->_setResponseType('html');

		$css_list = $this->_css;
		$page_info = $this->_page_info;

		$headerInfo = compact('css_list','page_info');

		$jsList['jsList'] = $this->_js;

		$contents['html_header'] = $this->_CI->load->view('components/html_header',$headerInfo,true);
		//$contents['javascript'] = $this->_CI->load->view('components/javascript',$javascript,true);
		foreach ($this->_layouts as $part => $components) {
			$contents[$part] = $this->_getContents($components,$datas);
		}
		$finalContents = array_merge($contents,$page_info);
		$this->_CI->load->view('layouts/'.$layout,$finalContents);
	}

	private function _setResponseType ($type = 'html') {
		switch($type) {
			case 'html' :
			default :
				$this->_CI->output->set_header('Content-Type : text/html; charset=UTF-8');
				break;
		}
	}

	private function _getContents ($components, $datas) {
		if(is_array($components) && !count($components)) {
			return false;
		}
		if(!is_array($components)) {
			$components = array($components);
		}
		$contents = array();
		foreach ($components as  $component) {
			$componentPageInfo = $this->_page_info;
			$relativeComponentPath = explode('/', $component);
			$key = $relativeComponentPath[count($relativeComponentPath) - 1];
			if(array_key_exists($key, $datas) && is_array($datas[$key])) {
				$componentPageInfo = array_merge($datas[$key],$componentPageInfo);
			}

			$contents[$component] = $this->_CI->load->view('components/'.$component,$componentPageInfo,true);
		}

		return $contents;
	}
}
