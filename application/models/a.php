  public function api_reg($data, $type) {
        $flag=TRUE;
        if ($type == 'tourist') {
           $q=$this->db->insert('tourist', $data);
            if ($q->num_rows() > 0)
                {
              echo "tourist inserted";
                 }
            else
                {return FALSE;}
        } elseif ($type == 'car_owner') {
             $q=$this->db->insert('car_owner', $data);
            if ($q->num_rows() > 0))
                echo "car owner inserted";
            else
                 return FALSE;
        } elseif ($type == 'tour_guide') {
          $q=$this->db->insert('tour_guide', $data);
            if ($q->num_rows() > 0)
              {  echo "tour guide inserted";}
            else
                {return FALSE;}
        } else {
            return FALSE;
        }
    }
