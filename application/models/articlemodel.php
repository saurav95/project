<?php

class Articlemodel extends CI_Model
{
	public function article_list() {
		$user_id = $this->session->userdata('user_id');
		$query = $this->db 
	                 ->select('title')
					 ->from('article')
					 ->where('user_id', $user_id )
					 ->get();
		
        	
		return $query->result();			 
	}                 
}

?>