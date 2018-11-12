<?php

class AnunciosController extends CI_Controller {

    public function index() {

        $data['hasSearch'] = false;
        $this->load->view('anuncios/inserir', $data);

    }

    public function salvar() {

        $data = $this->input->post();
        
        //print_r($data['anuncio']);

        $data_anuncio = $data['anuncio'];
        $data_produto = $data['produto'];
        
        //print_r($data_produto); die();
                
        $this->load->model('Anuncio');
        $this->Anuncio->insert($data_anuncio);
        $this->load->model('Produto');
        $this->Produto->insert($data_produto);

    }

}
