<?php

class Cmenu3 extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['judul']='cmenu 3';
        $this->load->view('templets/header',$data);
        $this->load->view('pages/vmenu3');
        $this->load->view('templets/footer');
    }

}