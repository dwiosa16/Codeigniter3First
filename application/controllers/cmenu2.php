<?php

class Cmenu2 extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['judul']='cmenu 2';
        $this->load->view('templets/header',$data);
        $this->load->view('pages/vmenu2');
        $this->load->view('templets/footer');
    }

}