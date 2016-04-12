<?php

class Post extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->model('node');

		$this->view->title = 'Home | Welcome';
		$this->view->nodes = $this->node->getNodes([]);

		$this->render();
	}
		
	public function detail($id)
	{
		$this->load->model('node');

		$node = $this->node->getNode($id);

		if(empty($node)) {
			redirect('/');
		}

		$this->view->node = $node;
		$this->view->title = $node->title;
		$this->view->nodes = $this->node->getNodes();

		$this->render();
	}
	
	public function create()
	{

	}
	
	public function update()
	{

	}

	public function delete($id)
	{

	}
}
