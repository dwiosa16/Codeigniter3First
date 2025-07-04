<?php

class Cstudents extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('mstudents');
        $this->load->helper('form','url');
    }
    public function index(){
        $data['judul']='cstudents';
        $data['qstudents'] = $this->mstudents->get_allstudents();
        $this->load->view('templets/header',$data);
        $this->load->view('pages/vstudents',$data);
        $this->load->view('templets/footer');
    }
    public function form(){
        //Get URL Var
        $to = $this->uri->segment(3);
        $id = $this->uri->segment(4);

    //Get Form var
    $id_num=addslashes($this->input->post('id_num'));
    $first_name=addslashes($this->input->post('first_name'));
    $last_name=addslashes($this->input->post('last_name'));
    $address=addslashes($this->input->post('address'));
    $phone_num=addslashes($this->input->post('phone_num'));

        if( $to=="add" ){
            $data['title'] = "Create a new record";
            $data['act'] ="add_save";
            $data['judul']='cstudents_form';
            $this->load->view('templets/header', $data);
            $this->load->view('pages/vstudents_form',$data);
            $this->load->view('templets/footer');
        }elseif($to=="add_save"){
            $data=[
                'id_num'=>$id_num,
                'first_name'=>$first_name,
                'last_name'=>$last_name,
                'address'=>$address,
                'phone_num'=>$phone_num
            ];
            $this->mstudents->ins($data);
            redirect('cstudents');
        }elseif($to=="upd"){
            $data['title'] = "Update record";
            $data['act'] = "upd_save";
            $data['qdetstudents'] = $this->mstudents->get_byid($id);
            $data['judul']='cstudents_form_update';
            $this->load->view('templets/header', $data);
            $this->load->view('pages/update',$data);
            $this->load->view('templets/footer');
        }elseif($to=="upd_save"){
            $data=[
                'id_num'=>$id_num,
                'first_name'=>$first_name,
                'last_name'=>$last_name,
                'address'=>$address,
                'phone_num'=>$phone_num
        ];
            $this->mstudents->upd($id,$data);
            redirect('cstudents');
            // redirect('update');
            // var_dump($id);
            // var_dump($data);
        }
    



    }
    public function del($id){
        $this->mstudents->del($id);
        redirect('cstudents');
    }
    public function cetak(){
        $data['qstudents'] = $this->mstudents->get_allstudents();
        $data['judul']='vstudents_preview';
        
        $this->load->view('pages/vstudents_preview',$data);
        
    }
}



















