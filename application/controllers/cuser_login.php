<?php

class Cuser_login extends CI_Controller{ 

        public function __construct()    
        {   parent::__construct();         
            $this->load->model('muser_login');     
        } 
        
        function is_logged_in()
        {   $is_logged_in = $this->session->userdata('ci_is_logged_in'); 
        
        if(!isset($is_logged_in) || $is_logged_in != true)
        {    
            $this->load->view('session/vlogin'); 
        }else
        {   
            redirect('chome');  
        } 
    } 
    function index(){      
        $this->is_logged_in();  
    } 
    function validate_login(){     
        if ($query = $this->muser_login->validasi()){       
            foreach ($query as $key) {      
            $session = array(
            'ci_name'=> $key->name,
            'ci_username'=> $this->input->post('username'),
            'ci_password'=> $this->input->post('password'),
            'ci_is_logged_in'=>true);    
            $this->session->set_userdata($session);    
        } 
    
    redirect('chome');  
    }else
    {
        redirect('cuser_login');   
    }  
} 
    
    function logout(){   
    $this->session->unset_userdata('ci_name');   
    $this->session->unset_userdata('ci_username');   
    $this->session->unset_userdata('ci_password');   
    $this->session->unset_userdata('ci_is_logged_in');   
    redirect('cuser_login'); 
    } 
} 