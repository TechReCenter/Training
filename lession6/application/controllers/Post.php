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

		$data['title'] = 'Home | Welcome';
		$data['nodes'] = $this->node->getNodes([]);

		$this->load->view('post/index', $data);
	}
		
	public function detail($id)
	{
		$this->load->model('node');

		$node = $this->node->getNode($id);

		if(empty($node)) {
			redirect('/');
		}
			
		$data['node'] = $node;
		$data['title'] = $node->title;
		$data['nodes'] = $this->node->getNodes();

		$this->load->view('post/detail', $data);
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
