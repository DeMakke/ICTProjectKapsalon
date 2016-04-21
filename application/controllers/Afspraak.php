<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name Afspraak.php
 * @author Niels Bekkers
 */
class Afspraak extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
    public function index(){
        $this->load->view("afspraak");
    }
}

