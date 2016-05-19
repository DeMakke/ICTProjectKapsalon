<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class afspraak_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function toonBehandeling(){
        return $this->db->get_where('tblbehandeling');
    }
    
    public function insertAfspraak($data){
        return $this->db->insert('tblafspraak',$data);
    }
    
    public function getKlant($id){
        $this->db->select('tblklant.username');
        $this->db->from('tblklant');
        $this->db->join('tblafspraak', 'tblklant.id_user = tblafspraak.id_user');
        $this->db->where('id_user',$id);
        $klant = $this->db->get();
        return $klant;
    }
    
    public function getBehandeling($id){
        $this->db->select('tblbehandeling.Type');
        $this->db->from('tblbehandeling');
        $this->db->join('tblafspraak', 'tblbehandeling.BehandelingID = tblafspraak.BehandelingID');
        $this->db->where('id_user',$id);
        $behandeling = $this->db->get();
        return $behandeling;
    }
    
    public function getTijd($id){
        $this->db->select('Datum');
        $this->db->from('tblafspraak');
        $this->db->where('id_user',$id);
        $tijd = $this->db->get();
        return $tijd;
    }
    
    public function getKapster($id){
        $this->db->select('voornaam');
        $this->db->from('tblpersoneel');
        $this->db->join('tblafspraak', 'tblpersoneel.KapsterID = tblafspraak.KapsterID');
        $this->db->where('id_user',$id);
        $kapster = $this->db->get();
        return $kapster;
    }
    
    public function getAantalAfspraken($id){
        $this->db->select('count(*)');
        $this->db->from('tblafspraak');
        $this->db->where('id_user',$id);
        $aantalAfspraken = $this->db->get();
        return $aantalAfspraken;
    }
}