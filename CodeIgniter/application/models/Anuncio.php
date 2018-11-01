<?php

class Anuncios extends CI_Model {

    public $descricao;
    public $content;
    public $date;

    public function insert_entry()
    {
        $this->input->post('descricao');
        $this->input->post('title');
        $this->date = time();

        $this->db->insert('entries', $this);
    }