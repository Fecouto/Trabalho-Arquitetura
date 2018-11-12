<?php

class Produto extends CI_Model {

    public function insert($data)
    {
//die($data);
        
        print_r($data);
        $this->db->insert('produto', $data);
    }
}