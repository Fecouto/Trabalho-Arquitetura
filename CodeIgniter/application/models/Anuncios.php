<?php

class Anuncios extends CI_Model {

    public function insert($data)
    {
//die($data);
        $data['date'] = date('Y-m-d');
        print_r($data);
        $this->db->insert('anuncios', $data);
    }
}
