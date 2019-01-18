<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
    	$data['main_content'] = 'index';	
    	// $data['query'] = $this->main_model->view_course_register_model();
    	$this->load->view('template', $data);
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function form()
	{
    	$data['main_content'] = 'form';	
    	$this->load->view('template', $data);
	}

	public function table_data()
	{
    	$data['main_content'] = 'table_data';	
    	$this->load->view('template', $data);
	}
}

