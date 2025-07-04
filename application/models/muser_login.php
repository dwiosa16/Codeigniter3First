<?php class Muser_login extends CI_Model {  
    function validasi()
{ 

$this->db->where('username',$this->input->post('username'));  
$this->db->where('password',$this->input->post('password')); 

$query = $this->db->get('user'); 

if($this->db->affected_rows() == 1){ 

    return $query->result(); 

        }
    } 
}