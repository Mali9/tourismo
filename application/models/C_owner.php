<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_owner extends CI_Model
{
    public function sel_c_owner()
    {
        $query=$this->db->get("car_owner");
        return $query->result();
    }
    public function car_owner_info($id)
    {
        $this->db->where('carOwner_id',$id);
        $q=$this->db->get("car_owner");
        return $q->result();
    }
}
