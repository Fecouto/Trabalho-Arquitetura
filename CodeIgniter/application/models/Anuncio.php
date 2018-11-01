<?php

class Anuncios extends CI_Model {

    public $descricao;
    public $content;
    public $date;

    public function insert($data)
    {
die($data);
        $data['date'] = time();
        
        $this->db->insert('entries', $data);
    }