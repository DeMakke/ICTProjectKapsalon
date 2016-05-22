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
        
        parent::__construct();
    }
    
    /**
     * 
     * @param type $data
     * @return type
     * data in personeel tabel toevoegen
     */
    function insertIntoPersoneel($data)
    {
        return $this->db->insert('tblpersoneel',$data);
    }
    
    /**
     * 
     * @return type
     * Haalt alle personeel op in database
     */
    function get_all()
    {
        return $this->db->get_where('tblpersoneel');
    }
    
    /**
     * 
     * @param type $id
     * verwijderen uit tblpersoneel op basis van ID
     */
    function row_delete($id){
        
        $this->db->where('kapsterID',$id);
        $this->db->delete('tblpersoneel');
    }
    /**
     * 
     * @param type $id
     * @return type
     * Haalt 1 persoon op uit tblpersoneel op basis van ID
     */
    function getSinglePersonel($id){
        
        $this->db->select('*');
        $this->db->from('tblpersoneel');
        //vergelijkt de id van de ingelogde gebruiker met deze van de database
        $this->db->where('KapsterID ='.$id);
        //haalt gegevens op
        $query = $this->db->get();
        //stuurt query uit als array
        return $query->result_array();
    }
    /**
     * 
     * @param type $id
     * @param type $data
     * @return type
     * update personeel op basis van ID en toegevoegde data
     */
    function update_personel($id,$data){
        
        $this->db->where('KapsterID',$id);
        return $this->db->update('tblpersoneel',$data);
    }
       
    
}