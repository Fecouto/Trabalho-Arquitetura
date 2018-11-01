<?php

class AnunciosController extends CI_Controller {
  
    public function index() {

        $data['hasSearch'] = false;
        $this->load->view('anuncios/inserir', $data);

    }

    public function salvar() {

        echo 'salvar';

    }

}
