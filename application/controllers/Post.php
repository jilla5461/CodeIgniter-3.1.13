<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *  Post Controller
 */
class Post extends CI_Controller {
	private $crud;
	public function __construct() {
        parent::__construct();
        $this->load->model('Crud'); // Load the Crud model
        $this->crud = $this->Crud; // Assign the Crud model instance to the $crud property
    }

	public function index()
	{
		$data['data'] = $this->crud->get_records('posts');
		$this->load->view('post/list', $data);
	}


	public function create()
	{
		$this->load->view('post/create');
	}

	public function store() {
        // Now you can use $this->crud->insert() and other methods
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'age' => $this->input->post('age'),
        );
        $this->crud->insert('posts', $data);

        // Redirect to the post page
        redirect('post'); // Assuming 'post' is the URL or route of your post page
    }
	

	public function edit($id)

	{
		$data['data'] = $this->crud->find_record_by_id('posts', $id);
		$this->load->view('post/edit', $data);
		
	}

	public function update($id)
	{
		
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['password'] = md5($this->input->post('password'));
		$data['age'] = $this->input->post('age');

		$this->crud->update('posts', $data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been updated successfully.</div>');
		redirect('post');
	}

}