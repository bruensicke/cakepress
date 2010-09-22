<?php
/**
 * LayoutComponent
 *
 * @package cakepress
 * @author Dirk Brünsicke
 * @version $Id$
 * @copyright bruensicke.com GmbH
 **/
class LayoutComponent extends Object
{


	public $settings = array();


	public $defaults = array(
		'view' => 'Theme',
		'theme' => 'default',
		'admin_theme' => 'admin',
	);

	var $__controller;

	public function initialize(&$controller, $settings = array())
	{
		$this->settings = array_merge($settings, $this->defaults);
		$this->__controller = $controller;
		$this->setup();
	}

	function setup()
	{
		extract($this->settings);
		
		$this->__controller->view = $view;
		$this->__controller->theme = $theme;

		if (!empty($this->__controller->params['prefix']) && in_array($this->__controller->params['prefix'], Configure::read('Routing.prefixes')))
		{
			$this->__controller->theme = $admin_theme;
			$this->__controller->layout = $this->__controller->params['prefix']; //'admin'; //set admin-layout for admin-routes.
		}
	}

}
