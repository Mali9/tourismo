<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cat extends CI_Model
{
    public function sel_cat()
    {
        $q=$this->db->get("categories");
        return $q->result();
    }
    public function place($id)
    {
        $this->db->where('cat_id',$id);
        $q=$this->db->get('places');
        return $q->result();
    }
}