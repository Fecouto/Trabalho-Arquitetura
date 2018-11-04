<?php

class Anuncios extends CI_Model {

    public $descricao;
    public $content;
    public $date;

    public function insert($data)
    {
//die($data);
        $data['date'] = date('d-m-y');
        print_r($data); die();
        $this->db->insert('entries', $data);
    }
}