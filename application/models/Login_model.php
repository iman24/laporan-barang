<?php 

class Login_model extends CI_Model {


	function get($user, $pass){
        $q = $this->db->get_where('user', array('username' => $user, 'password' => $pass));
        return $q->result();
    }

	function cek_username($username){
        $q = $this->db->get_where('user', array('username'=> $username));
        return $q->result_array();
    }

    function cek_pw($user,$pw){
        $q = $this->db->get_where('user', array('username'=> $user, 'password' => $pw));
        return 
        $q->result_array();
        
    }

	function cek($user,$pw=''){
        $ar = array();
        $ar['username'] = $user;
        if($pw != '')
        $ar['password'] = $pw;
        
        
        $q = $this->db->get_where('user', $ar);
        return $q->result_array();
        
    }

    
}
