<?php

class Cmenu1 extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['judul']='cmenu 1';
        $this->load->view('templets/header',$data);
        $this->load->view('pages/vmenu1');
        $this->load->view('templets/footer');
    }

}