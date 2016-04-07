<?php

class Controller
{
	var $controller;
	var $action;
	var $route;
    var $view;

	public function __construct($options = [])
    {
        $this->controller = '';
        $this->action = '';
        $this->route = '';
        $this->view = new ArrayObject([], ArrayObject::STD_PROP_LIST);
        $this->assign($options);
    }

    public function assign($data)
    {
        $data = (array) $data;

        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }

        return $this;
    }

	public function render($view = '') 
	{
		$view = $view ? $view : $this->action;

		extract((array) $this->view);

		include ROOT . "/views/{$view}.phtml";
	}
}