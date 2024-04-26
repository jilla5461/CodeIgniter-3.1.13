<?php
defined('BASEPATH') or exit('No direct script access allowed');

class See extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load necessary libraries and models
        $this->load->library('form_validation');
        $this->load->model('Crud'); // Load your model for database operations
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function login()
{
    // Form validation rules
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() == FALSE) {
        // Validation failed, show login page with validation errors
        $data['errors'] = validation_errors(); // Get validation errors
        $this->load->view('login', $data);
    } else {
        // Validation passed, proceed to check credentials
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        // Check credentials in the database
        $user = $this->Crud->check_credentials($username, $password);

        if ($user) {
            // Credentials are correct, redirect to post page
            $this->session->set_flashdata('success', 'Login successful.'); // Example flash message
            redirect('post'); // Assuming 'post' is the URL or route of your post page
        } 
        else {
            // Credentials are incorrect, show error message
            $this->session->set_flashdata('error', 'Invalid username or password.');
            redirect('see/index');
        }
    }
}


    public function logout()
    {
        // Destroy session and redirect to login page
        $this->session->unset_userdata('user_id');
        $this->session->sess_destroy();
        redirect('see/login');
    }
}
?>
            