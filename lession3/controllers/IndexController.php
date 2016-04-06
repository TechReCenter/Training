<?php

class IndexController extends Controller
{
	/**
	 * @todo index/index
	 */
	public function indexAction() 
	{
		$this->view->data = Node::getList();

		$this->render();
	}

	/**
	 * @todo index/detail
	 */
	public function detailAction()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		
		$this->view->id = $id;
		$this->view->post = Node::getPost($id);
		$this->view->data = Node::getList();

		$this->render();
	}
}