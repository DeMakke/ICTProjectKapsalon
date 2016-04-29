<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class profieluser_model extends CI_Model{
    function toonKlant(){
        $data = $this->session->userdata('usersessie');
        
        $this->database->query('SELECT * FROM tblklant WHERE (id_user =='.$data['id_user'].'');
        $query = $this->database->get('tblklant');
        
        if($query->num_rows() > 0){
            foreach ($query->result() as $row){
                $data2[]=$row;
            }
        }
        
        return $data2;
        
        


    }
}