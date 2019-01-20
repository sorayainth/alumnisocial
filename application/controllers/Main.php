<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('main_model');
        $this->load->model('insert_model');
        $this->load->model('alert_model');
        $this->load->library('session');

        // $this->member_model->checksession();

    }

	public function index()
	{
        $this->load->view('login');
	}

	public function dashboard()
	{
        $data['main_content'] = 'index';    
        // $data['query'] = $this->main_model->view_course_register_model();
        $this->load->view('template', $data);
	}

	public function form()
	{
    	$data['main_content'] = 'form';	
    	$this->load->view('template', $data);
	}

	public function table_data()
	{
    	$data['main_content'] = 'table_data';	
    	$data['query'] = $this->main_model->get_user();
    	$this->load->view('template', $data);
	}

	public function save_form()
	{

        if ($this->insert_model->insert_form() == true) {

            $this->alert_model->alert_success();
            redirect('main/print_report');

        }else{
            
            $this->alert_model->alert_error();
            redirect('main/form');
        }

	}

	public function table_student_info()
	{
    	$data['main_content'] = 'table_student_info';	
    	$data['query'] = $this->main_model->get_student_info();
    	$this->load->view('template', $data);
	}

    public function print_report()
    {
    
        $data['main_content'] = 'print_report';   
        // $data['query'] = $this->main_model->get_student_info();
        $this->load->view('template', $data);
    }

}

