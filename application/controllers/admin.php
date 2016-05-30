<?php
class Admin extends My_controller {

	public function index()
	{ 
	    $this->load->helper('form');
		$this->load->view('admin/admin_login');
	}
	
	public function admin_login()
	{ 
	    $this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'User Name' , 'required|alpha|trim');
		$this->form_validation->set_rules('password', 'password' , 'required');
		if($this->form_validation->run()){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			echo "username: $username and  password: $password";  
		}
		
		else{
			$this->load->view('admin/admin_login');
		}
	}
}
?>
