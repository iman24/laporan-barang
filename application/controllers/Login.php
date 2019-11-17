<?php

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('login_model','login');
    }

    // menu login
    function index(){
        $this->load->view('login');
    }


	function auth(){
        
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $c = $this->login->cek($user,$pass);

        if(count($c) > 0){
            // apabila cocok user n pw
            $this->session->set_userdata('access', $c[0]['id']);
            echo 'success';
            
        }else{
            echo 'failed';
            // password gagal
        }
        

    }
    
	private function cek_user($user){
        return $this->login->cek_username($user);
    }
    

	private function cek_pw($user, $pw){
        return $this->login->cek_pw($user, $pw);
    }

	function tes(){
        var_dump($this->login->cek("admin","1"));
        
    }
}