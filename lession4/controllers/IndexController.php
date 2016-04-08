<?php

class IndexController extends Controller
{
	/**
	 * @todo index/index
	 */
	public function indexAction() 
	{
		$data = Node::getList();

		foreach($data as $k => $item) {
			$data[$k]['link'] = 'detail/' . $k;
		}

		$this->view->data = $data;

		$this->render();
	}

	/**
	 * @todo index/detail
	 */
	public function detailAction()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 0;

		$post = Node::getPost($id);
		$data = Node::getList();

		foreach($data as $k => $item) {
			$data[$k]['link'] = 'detail/' . $k;
		}


		$this->view->id = $id;
		$this->view->post = $post;
		$this->view->data = $data;

		$this->render();
	}
}