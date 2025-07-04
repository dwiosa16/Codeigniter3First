<?php

    class Chelloworld extends CI_Controller{
        public function __construct(){
            parent::__construct();
        }
        public function index(){
            $data['judul']='Chelloworld';
            $this->load->view('templets/header', $data);
            $this->load->view('pages/vhelloworld');
            $this->load->view('templets/footer');
        }
    }