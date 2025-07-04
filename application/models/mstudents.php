<?php

class Mstudents extends CI_Model{
    var $tabel = 'academic';
    function __construct()
    {
        parent::__construct();
    }

    function get_allstudents(){
        $this->db->from($this->tabel);
        $query = $this->db->get();

        //Any data?
        if ($query->num_rows() > 0 ){
            return $query->result();
        }
    }
    function ins($data){
        $this->db->insert($this->tabel,$data);
        return TRUE;
    }
    function upd($id,$data)
    {
        $this->db->where('stu_id',$id);
        $this->db->update($this->tabel,$data);

        return TRUE;
    }
    function get_byid($id){
        $this->db->from($this->tabel);
        $this->db->where('stu_id',$id);

        $query = $this->db->get();

        if( $query->num_rows() > 0 ){
            // var_dump($query->num_rows());
            return $query->result();

        }
    }
    function del($id){
        $this->db->where('stu_id',$id);
        $this->db->delete($this->tabel);
        if( $this->db->affected_rows()==1 ){
            return TRUE;
        }
        return FALSE;
    }


}
















