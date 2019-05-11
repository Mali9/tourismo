<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_guide_register extends CI_Controller
{

    public function index() {
        $this->load->view('register/guideregister');
        
    }

}
