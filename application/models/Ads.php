<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ads extends CI_Model
{
	public function get_ads($cat_id)
	{
		$this->db->where('cat_id', $cat_id);
		$q=$this->db->get('adds');
		return $q->result();
	}
	public function get_cat()
	{
		 $p_id=0;
		 $c_id=0;
		$id=$this->session->userdata('id');
		$res=$this->db->query("select place_id,count(*) as cunt from search_result where tourist_id=$id group by(place_id) order by(place_id) DESC limit 1");
		foreach ($res->result() as $value) {
			$p_id=$value->place_id;
		}
		$this->db->where('place_id', $p_id);
		
		$r1=$this->db->get('places');
		foreach ($r1->result() as $value) {
			$c_id=$value->cat_id;
		}
		return $c_id ;

	}
    
}