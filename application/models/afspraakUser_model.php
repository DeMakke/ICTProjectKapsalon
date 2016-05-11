<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class afspraakUser_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function toonBehandeling(){
        $query = $this->db->get('tblbehandeling');
        $behandeling = '';
        
        foreach($query->result_array() as $row){
            $behandeling .= '<option value="'.$row['BehandelingID'].'">'.$row['Type'].'</option>';
        }
        return $behandeling;
    }
    
    public function toonPersoneel(){
        $query = $this->db->get('tblpersoneel');
        $personeel = '';
        
        foreach($query->result_array() as $row){
            $personeel .= '<option value="'.$row['KapsterID'].'">'.$row['Voornaam'].'</option>';
        }
        return $personeel;
    }
    
    public function toonMaand(){
        $months = array();
        $currentMonth = (int)date('m');
        $html = '';
        
        for ($x = $currentMonth; $x < $currentMonth + 12; $x++) {
            $months[$x] = date('F', mktime(0, 0, 0, $x));
            $html .= '<option value="'.$x.'">'.$months[$x].'</option>';
        }
        
        return $html;
    }
}
