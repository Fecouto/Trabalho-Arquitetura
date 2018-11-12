<?php

//require_once dirname(__FILE__) . '../../class/TabelaBanco.php';

class AnunciosController extends CI_Controller {

    /*function __construct() {
        
        $db = new TabelaBanco();
        $db->create();
        
    }*/

    public function index() {
        //die();
        $data['hasSearch'] = false;
        $this->load->view('anuncios/inserir', $data);

    }

    public function salvar() {

        $data = $this->input->post();
        
        //print_r($data['anuncio']);
        
        //print_r($data_produto); die();
               
        $this->load->model('Produto');
        $id_produto = $this->Produto->insert($data['produto']);

        $data_anuncio = $data['anuncio'];
        $data_anuncio['id_produto'] = $id_produto;
        $this->load->model('Anuncio');
        $this->Anuncio->insert($data_anuncio);
        
    }

}
