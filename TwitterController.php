<?php

class TwitterController extends PluginController {

	var $path;
	var $fullpath;
	
	public function __construct()
	{
		$this->setLayout('backend');
		$this->assignToLayout('sidebar', new View('../../../plugins/twitter/views/sidebar'));
	}
	
	public function index()
	{
		$this->display('twitter/views/index');
	}

	public function extending() {
		$this->display('twitter/views/extending');
	}

	public function contact() {
		$this->display('twitter/views/contact');
	}

}