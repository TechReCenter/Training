<?php

class AdminController extends Controller
{
	/**
	 * @todo admin/create
	 */
	public function createAction() 
	{
		$message = '';

		if (isset($_POST['title']) && isset($_POST['content'])) {
			$title = $_POST['title'];
			$content = $_POST['content'];
			
			if ($post = Node::create($title, $content)) {
				header('Location:' . __());
			} else {
				$message = 'Add new post error';
			}
		}

		$this->view->message = $message;

		$this->render();
	}

	/**
	 * @todo admin/update
	 */
	public function updateAction()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$post = Node::getPost($id);

		$message = '';

		if (isset($_POST['title']) && isset($_POST['content'])) {
			$title = $_POST['title'];
			$content = $_POST['content'];

			if (Node::update($id, $title, $content)) {
				$post->title = $title;
				$post->content = $content;
			} else {
				$message = 'Update new error';
			}
		}

		$this->view->id = $id;
		$this->view->post = $post;
		$this->view->message = $message;

		$this->render();
	}

}