<?php

class Controller extends CI_Controller
{
	var $view;

	public function __construct()
	{
		parent::__construct();

		$this->view = new ArrayObject([], ArrayObject::STD_PROP_LIST);
	}

	public function render($view = '', $data = [])
	{
		/**
		 * Build view path from router
		 */
		if (empty($view)) {
			$view = $this->router->fetch_class() . '/' . $this->router->fetch_method();
		}

		$data = (array) $data + (array) $this->view;

		return $this->load->view($view, $data);
	}	
}