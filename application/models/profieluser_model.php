<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class profieluser_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_all(){
        //haalt huidige userdata op van loginsessiee
        $data = $this->session->userdata('usersessie');
        $this->db->select('*');
        $this->db->from('tblklant');
        //vergelijkt de id van de ingelogde gebruiker met deze van de database
        $this->db->where('id_user ='.$data['id_user']);
        //haalt gegevens op
        $query = $this->db->get();
        //stuurt query uit als array
        return $query->result_array();
    }
    
    function update_klant($id,$data){
        $id=$_GET['id'];
        $this->db->where('id_user',$id);
        
        return $this->db->update('tblklant',$data);
    }
    
//    public function getEmail(){
//        $data = $this->session->userdata('usersessie');
//        $this->db->select('user_email');
//        $this->db->from('login');
//        $this->db->where('id_user ='.$data['id_user']);
//        $query = $this->db->get()->row()->user_email;
//        
//        return $query;
//    }
}