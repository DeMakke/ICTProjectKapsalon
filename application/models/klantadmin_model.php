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
    
    public function get_all(){
        
        $this->db->select('*');
        $this->db->from('tblklant');
       
        //haalt gegevens op
        $query = $this->db->get();
        
        //stuurt query uit als array
        return $query->result_array();
    }
}