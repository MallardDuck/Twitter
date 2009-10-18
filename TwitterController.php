<?php

class TwitterController extends PluginController {
	
	public function __construct() {
		$this->setLayout('backend');
		$this->assignToLayout('sidebar', new View('../../plugins/twitter/views/sidebar'));
	}
	
	public function index() {
		$this->display('twitter/views/index');
	}

	public function extending() {
		$this->display('twitter/views/extending');
	}

}