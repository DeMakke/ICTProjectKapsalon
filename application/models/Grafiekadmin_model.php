<?php

/**
 * @name Grafiekadmin_model.php
 * @author Niels Bekkers
 */

class Grafiekadmin_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    function count_all(){
        $this->db->select('*');
        $this->db->from('login');
        //$this->db->where('id_user');
        
        return $this->db->count_all_results();
    }
}
