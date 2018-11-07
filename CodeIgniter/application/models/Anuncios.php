<?php

class Anuncios extends CI_Model {

    public function insert($data)
    {
//die($data);
        $data['date'] = date('d-m-Y');
        print_r($data); die();
        $this->db->insert('entries', $data);
    }
}