<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name Profiel.php
 * @author Niels Bekkers
 */
class Profiel extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
    public function index(){
        $this->load->view("profiel");
    }
}
