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
    
    public function get_all($id){
       
        return $this->db->get_where('tblklant');
       
    }
}