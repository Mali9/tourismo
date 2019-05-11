<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rate extends CI_Controller {
    public function ra ($place_id)
    {
        $pos=array();
        $neg=array();
        $pos_count=0;
        $neg_count=0;
        $w=array();
        $max=0;
        $max_key=" ";

        $q=$this->db->get('rate');
        foreach ($q->result() as $value) {
            $pos[]=$value->pos;
            $neg[]=$value->neg;
            $w[]=$value->id;
            
        }
        

        
        $r=$this->input->post('reviwe');
        $str = "$r";
        $words = array_count_values(str_word_count($str, 1));
        foreach ($words as $key => $value) {
             for ($i=0;  $i < count($w); $i++) { 
                 if($key == $pos[$i])
                 {
                    $pos_count++;
                 }
                 if ($key == $neg[$i]) {
                    $neg_count++;
                 }

             }
             if($value > $max)
             {
                $max=$value;
                $max_key=$key;
             }
        }
        if ($pos_count > $neg_count) {
            $object['place_id']=$place_id;
            $object['rate']=1;
            $this->db->insert('places_rate', $object);
            if ($this->db->affected_rows() > 0) {
                 $this->db->where('pos', $max_key);
                 $this->db->get('pos');
                 if ($this->db->affected_rows() > 0) {
                 redirect('Categories/plac/?sub='.$place_id,'refresh');
                     }
                     else
                     {
                 $d1['pos']=$max_key;
                 $this->db->insert('rate', $d1);
                 
                     }
                
                redirect('Categories/plac/?sub='.$place_id,'refresh');
            }
            else
            {
                echo "error";
            }
        }
            elseif($pos_count < $neg_count){
            $object['place_id']=$place_id;
            $object['rate']=0;
            $this->db->insert('places_rate', $object);
            if ($this->db->affected_rows() > 0) {
                $this->db->where('neg', $max_key);
                $this->db->get('neg');
                if ($this->db->affected_rows() > 0) {
                 redirect('Categories/plac/?sub='.$place_id,'refresh');
                   }
                   else {
                $d2['neg']=$max_key;
                $this->db->insert('rate', $d2);
                
                   }
                redirect('Categories/plac/?sub='.$place_id,'refresh');
            }
            else
            {
                echo "error";
            }

            }
            else
            {
                
                redirect('Categories/plac/?sub='.$place_id,'refresh');
            }

        
    }
 
}

?>