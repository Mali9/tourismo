<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model {

    public function find($val,$flag=False) {
       
      
        $q = $this->db->query("SELECT * FROM car_owner WHERE  username LIKE '%" . $val . "%' limit 3 ");

        if ($q->num_rows() > 0) {
            $res['car_owner'] = $q->result();
        } else {
            $res['car_owner'] = " ";
        }
        $q1 = $this->db->query("SELECT * FROM categories WHERE  name LIKE '%" . $val . "%' limit 3 ");
        if ($q1->num_rows() > 0) {
            $res['categories'] = $q1->result();
        } else {
            $res['categories'] = " ";
        }

        $q2 = $this->db->query("SELECT * FROM places WHERE  name LIKE '%" . $val . "%' limit 3 ");
        if ($q2->num_rows() > 0) {
            $res['places'] = $q2->result();
            if($flag==TRUE){
            foreach ($q2->result() as $place) {
                $data['place_id']="";
                $data['place_id']=$place->place_id;
                $data['place']=$place->name;
                $data['tourist_id']=$this->session->userdata('id');
                if($this->session->userdata('type') == 'tourist')
                {
                $this->db->insert('search_result',$data);
                }
            }
            }
        } else {
            $res['places'] = " ";
        }
        $q3 = $this->db->query("SELECT * FROM tourist WHERE  username LIKE '%" . $val . "%' ");
        if ($q3->num_rows() > 0) {
            $res['tourist'] = $q3->result();
        } else {
            $res['tourist'] = " ";
        }
        $q4 = $this->db->query("SELECT * FROM tour_guide WHERE  username LIKE '%" . $val . "%' limit 3 ");

        if ($q4->num_rows() > 0) {
            $res['tour_guide'] = $q4->result();
        } else {
            $res['tour_guide'] = " ";
        }
        return $res;
    }

}
