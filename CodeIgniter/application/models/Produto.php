<?php

class Produto extends CI_Model {

    public function insert($data)
    {
//die($data);
        
        if ($this->db->insert('produto', $data)) {
            return $this->db->insert_id();
        }
        //print_r($data);
        return false;        
   
    }
}