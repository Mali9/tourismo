<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour_guide extends CI_Controller
{

    public function index()
    {
        $this->load->model('Tguide');
        $data['users']=$this->Tguide->sel_guide();
        $this->load->view('tour_guide/tour_giude',$data);
    }
    public function register() {
        $this->load->view('register/guideregister');        
    }
    public function profile()
    {
        $this->load->model('Tguide');
        $data['users']=$this->Tguide->guide_info($_GET['sub']);
        $this->load->model("Count_visit");
        $data['t']=$this->Count_visit->get_tguide_num_hire($_GET['sub']);
        $this->load->view('tour_guide_profile/tour_guide_profile',$data);
        
    }

}
