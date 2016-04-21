<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @name Kalender.php
 * @author Niels Bekkers
 */
class Kalender extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
    public function index(){
        $this->load->view("kalender");
    }
}

