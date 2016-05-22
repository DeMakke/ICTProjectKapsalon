<?php

/**
 * @name: klantadmin_model.php
 * @author: Niels Bekkers
 */

class klantadmin_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    
    /**
     * 
     * @param int $id
     * @return array
     * query voor alle gegevens op te halen
     */
        
    public function get_all(){
       
        return $this->db->get_where('tblklant');
       
    }
    
    /**
     * 
     * @param int $id
     * query voor een rij te verwijderen op basis van id tabel login
     */
    
    function row_delete_login($id){
        
        $this->db->where('id_user',$id);
        $this->db->delete('login');
    }
}