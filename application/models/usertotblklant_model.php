<?php

/**
 * @name: user_model.php
 * @author: Niels Bekkers
 */

class usertotblklant_model extends CI_Model
{
    function __construct()
    {
        // Roep de constructor op
        parent::__construct();
    }
    
    //insert in tblklant tabel
    function insertUserTotblklant($data2)
    {
        return $this->db->insert('tblklant',$data2);
    }
    
}
