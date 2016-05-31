<?php
class Admin extends My_controller {
  public function dashboard(){
	  
	  $this->load->model('articlemodel' , 'articles');
	  $articles = $this->articles->article_list();
	  $this->load->view('admin/dashboard',['articles' => $articles ]);
  }	
	
	
 public function __construct() {
	 parent::__construct();
	 if(! $this->session->userdata('user_id'))
		 return redirect('login');
 }	
	
}

?>