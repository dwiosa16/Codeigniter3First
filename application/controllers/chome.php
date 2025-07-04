<?php
class Chome extends CI_Controller
    {  
    function __construct()
    {
        parent :: __construct();   
        $this->is_logged_in();  
    } 
    function is_logged_in(){   
        $is_logged_in = $this->session->userdata('ci_is_logged_in'); 

        if(!isset($is_logged_in) || $is_logged_in != true)
        {    
            redirect('cuser_login');  
        }  
    } 
        function index(){ 
        $this->load->view('session/vhome');  
    }   
    
} 