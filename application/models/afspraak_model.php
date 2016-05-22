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
    
    //toon behandelingen voor formulier selectType
    public function toonBehandeling(){
        return $this->db->get_where('tblbehandeling');
    }
    //de gekozen waardes wegschrijven naar de tabel afspraak
    public function insertAfspraak($data){
        return $this->db->insert('tblafspraak',$data);
    }
    //alle afspraken van huidige user tonen met benodigde details
    public function getAfspraak($id){
        $this->db->select('tblafspraak.AfspraakDag, tblafspraak.Tijd,tblbehandeling.Type, '
                . 'tblpersoneel.Voornaam, tblpersoneel.Achternaam');
        $this->db->from('tblafspraak');
        $this->db->join('tblklant', 'tblklant.id_user = tblafspraak.id_user');
        $this->db->join('tblbehandeling','tblafspraak.BehandelingID = tblbehandeling.BehandelingID');
        $this->db->join('tblpersoneel','tblafspraak.KapsterID = tblpersoneel.KapsterID');
        $this->db->where('tblafspraak.id_user',$id);
        $this->db->order_by('tblafspraak.AfspraakDag, tblafspraak.Tijd','asc');
        return $this->db->get();
    }
    //alle afspraken van alle users tonen met benodigde details
    public function getAlleAfspraken(){
        $this->db->select('tblklant.username, tblklant.Voornaam AS klantVoornaam, tblklant.Achternaam AS klantAchternaam, '
                . 'tblafspraak.AfspraakDag,tblafspraak.Tijd, tblbehandeling.Type, tblbehandeling.Prijs,'
                . 'tblafspraak.KapsterID, tblpersoneel.Voornaam as persVoornaam, tblpersoneel.Achternaam AS persAchternaam');
        $this->db->from('tblafspraak');
        $this->db->join('tblklant', 'tblklant.id_user = tblafspraak.id_user');
        $this->db->join('tblbehandeling','tblafspraak.BehandelingID = tblbehandeling.BehandelingID');
        $this->db->join('tblpersoneel','tblafspraak.KapsterID = tblpersoneel.KapsterID');
        $this->db->order_by('tblafspraak.AfspraakDag, tblafspraak.Tijd','asc');
        return $this->db->get();
    }
    
    function row_delete($KapsterID,$AfspraakDag,$Tijd){
        $this->db->where('KapsterID',$KapsterID);
        $this->db->where('AfspraakDag',$AfspraakDag);
        $this->db->where('Tijd',$Tijd);
        $this->db->delete('tblafspraak');
    }
}
