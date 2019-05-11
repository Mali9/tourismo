<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller
{

    public function index()
    {
        $this->load->model('Cat');
        $query['users']=$this->Cat->sel_cat();
        $this->load->view('categories/categories',$query);
    }
    public function places()
    {
        $this->load->model('Cat');
        $query['users']=$this->Cat->place($_GET['sub']);
        $this->load->view('EDUCATIONAL_/Educational_tourism',$query);
    }
    public function plac()
    {
        $lat=0;
        $lang=0;
        $this->load->library('googlemaps');
        $this->load->model('Place');
        $dat['users']=$this->Place->plac($_GET['sub']);
        foreach ($dat['users'] as $value) {
            $lat=$value->lat;
            $lang=$value->lang;
        }


        $config['center'] = "$lat, $lang";
        $config['zoom'] = 17;
        $this->googlemaps->initialize($config);

        $marker = array();
        $marker['position'] = "$lat, $lang";
        $this->googlemaps->add_marker($marker);
        $dat['map'] = $this->googlemaps->create_map();

        $this->load->model('Vis');
        $dat['pos']=$this->Vis->get_option_pos($_GET['sub']);
        $dat['neg']=$this->Vis->get_option_neg($_GET['sub']);
        $this->load->view('Egyption_Pyramids/Eg',$dat);
        
    }

}
