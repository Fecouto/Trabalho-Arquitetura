<?php

class Anuncio extends CI_Model {

    public function incluirAnuncio($data)
    {
//die($data);
        $data['date'] = date('Y-m-d');
        //print_r($data);
        $this->db->insert('anuncio', $data);
    }
}
