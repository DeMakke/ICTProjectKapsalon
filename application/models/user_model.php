<?php

/**
 * @name: user_model.php
 * @author: Niels Bekkers
 */

class user_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    //insert into user table
    function insertUser($data)
    {
        return $this->db->insert('login', $data);
    }
    
}
?>