<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class personeel_model extends CI_Model
{
    function __construct()
    {
        // Roep de constructor op
        parent::__construct();
    }
    
    //insert in tblklant tabel
    function insertIntoPersoneel($data)
    {
        return $this->db->insert('tblpersoneel',$data);
    }
    //naam veranderen
    function get_all($id){
    
       
        return $this->db->get_where('tblpersoneel');
    }
    
    //delete functie
    function row_delete($id){
        $id=$_GET['id'];
        $this->db->where('kapsterID',$id);
        $this->db->delete('tblpersoneel');
    }
    
    //update functie
    
//    function update_student_id1($id,$data)
//    {
//        $this->db->where('KapsterID', $id);
//        $this->db->update('tblpersoneel', $data);
//    }
    
}