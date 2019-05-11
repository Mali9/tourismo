<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Place extends CI_Model
{
    public function plac($id)
    {
        $this->db->where('place_id',$id);
        $q=$this->db->get('places');
        return $q->result();
    }
}