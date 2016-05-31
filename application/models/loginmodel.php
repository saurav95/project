<?php

Class Loginmodel extends CI_Model {
	
	public function login_valid($username,$password) {
		
		$q = $this->db
					  ->from('user') 
					  ->where(['uname'=> $username ,'pword'=> $password])
                      ->get();

        if( $q->num_rows() )	{
			
			return $q->row()->id;
			
		}
        
		else{
			return FALSE;
		}		
	}
}

?>