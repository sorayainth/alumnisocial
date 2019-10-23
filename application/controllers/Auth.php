<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * This file is part of Auth_AD.

    Auth_AD is free software: you can redistribute it and/or modify
    it under the terms of the GNU Lesser General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Auth_AD is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Auth_AD.  If not, see <http://www.gnu.org/licenses/>.
 * 
 */

/**
 * @package         Auth_AD
 * @subpackage      example
 * @author          Mark Kathmann <mark@stackedbits.com>
 * @version         0.4
 * @link            http://www.stackedbits.com/
 * @license         GNU Lesser General Public License (LGPL)
 * @copyright       Copyright © 2013 Mark Kathmann <mark@stackedbits.com>
 */

class Auth extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		
		// this loads the Auth_AD library. You can also choose to autoload it (see config/autoload.php)
		$this->load->library('Auth_AD');
		$this->load->model('member_model');

	}
	
	public function login()
	{
		// read the form fields, lowercase the username for neatness
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		// check the login
			// the login was succesful, do your thing here
			// upon a succesful login the session will automagically contain some handy user data:
            if ($this->member_model->checklogin_admin() == true) {
            	if($this->auth_ad->login($username, $password)) {			
                $newdata = array(
                	'name_en' => $this->session->userdata('cn'), // contains the common name from the AD
					'username' => $username, // contains the username as processed
					'logged_in'=> $this->session->userdata('logged_in'), // contains a boolean (true)
					'sess_user' => true
                );
                // expires in 4 hours
                $this->config->set_item('sess_expiration' , 84000);
                $this->session->set_userdata($newdata);

                    redirect('main/dashboard');
		 		}
				else
				{
					$newdata = array(
						'sess_user' => false
					);
					$this->session->set_userdata($newdata);

					$this->session->set_flashdata('flashSuccess',
		            '<div class="alert alert-danger alert-dismissible fade in" role="alert">
		            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
		            </button>
		            <i class="fa fa-exclamation-triangle fa-lg"></i> รหัสผ่านไม่ถูกต้อง โปรดตรวจสอบความถูกต้องใหม่อีกครั้ง</div>');

		            redirect(base_url());
				}

            }elseif ($this->member_model->checklogin() == true) {
                $newdata = array(
                	'citizen_id' => $password, // contains the common name from the AD
					'username' => $username, // contains the username as processed
					'logged_in'=> $this->session->userdata('logged_in'), // contains a boolean (true)
					'sess_user' => true
                );
                // expires in 4 hours
                $this->config->set_item('sess_expiration' , 84000);
                $this->session->set_userdata($newdata);     

                redirect('main/form');       	

            } else {
				$newdata = array(
					'sess_user' => false
				);
				$this->session->set_userdata($newdata);

                if ($this->member_model->checklogin() == false) {
                    $this->session->set_flashdata('flashSuccess',
                    	'<div class="alert alert-danger">คุณยังไม่มีสิทธิ์เข้าใช้งานโปรดติดต่อผู้ดูแลระบบ</div>');

                    redirect(base_url());
                }
            }

            		// $this->session->set_flashdata('flashSuccess',
            		// 	'<div class="alert alert-danger">คุณยังไม่มีสิทธิ์เข้าใช้งานโปรดติดต่อผู้ดูแลระบบ</div>');

            		// redirect(base_url());

	}
	
	public function logout()
	{

    $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }

    	$this->session->sess_destroy();
    	$this->db->cache_delete_all();
    	redirect(base_url());

		// now that the logout is done, you can add code for the next step(s) here
	}
	
	public function checkloginstatus()
	{
		// check if the user is already logged in
		if(!$this->auth_ad->is_authenticated())
		{
			// not logged in, do what you need to do here
			// you could, for example, send the user to the login form
		}
		else 
		{
			// already logged in, forward to the home page or some such
		}
	}
	
	public function useringroup()
	{
		// check if the user is a member of a particular group (recursive search)
		if ($this->auth_ad->in_group($username, $groupname))
		{
			// the user is a member of the group
		}
		else 
		{
			// nope, not a member
		}
	}
}