<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Search_model');
    }

    public function index() {
        $this->load->view('search');
    }

    public function find() {
        //$this->load->model('Search');
        if(!$this->input->post('search'))
        {
            echo "<script> alert('plz enter the search');</script>";
            redirect("Home");
        }
        $val = htmlspecialchars($this->input->post('search'));
        $res = $this->Search_model->find($val);

        if ($res['car_owner'] == " "&& $res['categories'] == " " && $res['places'] == " " && $res['tourist'] == " " && $res['tour_guide'] == " ") {
            $data['result'] = "";
            $this->load->view('search/search_result', $data);
        } else {
            $data['result'] = $res;
            $this->load->view('search/search_result', $data);
        }
    }

    public function aja($val) {
        $flag=TRUE;
        $res = $this->Search_model->find($val,$flag);

        if ($res['car_owner'] == " " && $res['categories'] == " " && $res['places'] == " " && $res['tourist'] == " " && $res['tour_guide'] == " ") {
            $data['result'] = "No Result Found";
            $this->load->view('search/search_result', $data);
        } else {
            $data['result'] = $res;
            $this->load->view('search/search_result', $data);
        }
    }

    public function ajax() {
        $arr = array();
        $val = htmlspecialchars($this->input->post('search'));
        $res = $this->Search_model->find($val);
        if ($res['car_owner'] == " " && $res['categories'] == " " && $res['places'] == " " && $res['tourist'] == " " && $res['tour_guide'] == " ") {
            $arr[] = array('name' => " ");
        }

        if ($res['places'] != " ") {
            foreach ($res['places'] as $value) {
                $arr[] = array('name' => $value->name);
            }
        }
        if ($res['categories'] != " ") {
            foreach ($res['categories'] as $value) {
                $arr[] = array('name' => $value->name);
            }
        }
        if ($res['tourist'] != " ") {
            foreach ($res['tourist'] as $value) {
                $arr[] = array('name' => $value->username);
            }
        }
        if ($res['tour_guide'] != " ") {
            foreach ($res['tour_guide'] as $value) {
                $arr[] = array('name' => $value->username);
            }
        }
        if ($res['car_owner'] != " ") {
            foreach ($res['car_owner'] as $value) {
                $arr[] = array('name' => $value->username);
            }
        }
        echo json_encode($arr);
    }

}

?>