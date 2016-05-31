<?php
class Login extends My_controller {

	public function index()
	{ 
	    $this->load->helper('form');
		$this->load->view('public/admin_login');
	}
	
	public function admin_login()
	{ 
	    $this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'User Name' , 'required|alphanum|trim');
		$this->form_validation->set_rules('password', 'password' , 'required');
		if($this->form_validation->run()){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			$this->load->model('loginmodel');
			$login_id = $this->loginmodel->login_valid($username,$password);
            if( $login_id ) {
				$this->load->library('session');
				$this->session->set_userdata('user_id' , $login_id);

				return redirect('admin/dashboard');
			}
			
			else {
				echo "Try again there is a problem";
			}
        			
		}
		
		else{
			$this->load->view('public/admin_login');
		}
	}
	
	public function logout() {
		$this->session->unset_userdata('user_id' , $login_id);
		return redirect('login');
	}
}
?>
