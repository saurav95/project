<?php
class User extends My_controller {

	public function index()
	{
		$this->load->view('public/articles_list');
	}
}
?>
