<?php

class Node extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->model('users_model');
		$data['content'] = $this->users_model->get_all();
		$this->load->view('users_view', $data);
	}
		
	public function detail($id)
	{
		$id = intval($id);
		
		if($id!=0)
		{
			$this->load->model('users_model');
			$data['content'] = $this->users_model->get($id);
			$this->load->view('users_view', $data);
		}
		else
		{
			redirect(site_url(),'refresh');
		}
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
