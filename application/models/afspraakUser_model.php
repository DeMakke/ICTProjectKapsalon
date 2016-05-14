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
    
    public function toonBehandeling($id){
        return $this->db->get_where('tblbehandeling');
    }
    
    public function getTijd($id){
        return $this->db->get_where('tblafspraak');
    }
    
    public function insertAfspraak($data){
        return $this->db->insert('tblafspraak',$data);
    }
    
//    public function toonMaand(){
//        $months = array();
//        $currentMonth = (int)date('m');
//        $html = '';
//        
//        for ($x = $currentMonth; $x < $currentMonth + 12; $x++) {
//            $months[$x] = date('F', mktime(0, 0, 0, $x));
//            $html .= '<option value="'.$x.'">'.$months[$x].'</option>';
//        }
//        return $html;
//    }
//    
}