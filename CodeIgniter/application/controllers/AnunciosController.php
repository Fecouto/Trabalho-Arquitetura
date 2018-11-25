<?php

//require_once dirname(__FILE__) . '../../class/TabelaBanco.php';

class AnunciosController extends CI_Controller {

    /*function __construct() {
        
        $db = new TabelaBanco();
        $db->create();
        
    }*/

    public function index() {
        
        $data['hasSearch'] = false;
        $this->load->view('anuncios/incluirAnuncio', $data);

    }

    public function incluirAnuncio() {

        $data = $this->input->post();
        
        //print_r($data['anuncio']);

        $data_produto = $data['produto'];
    
        if ($data_produto['tamanhoAro'] == null){

            $data_produto['tamanhoAro'] = null;

        }
        
        if ($data_produto['quantidadeMarcha'] == null){

            $data_produto['quantidadeMarcha'] = null;

        }

        if($this->existeProduto($data_produto)){

            $this->load->model('Produto');
            $id_produto = $this->Produto->incluirProduto($data_produto);
            
        }
        else{

            $id_produto = null;
        
        }
        
        $data_anuncio = $data['anuncio'];
        $data_anuncio['id_produto'] = $id_produto;
        $this->load->model('Anuncio');
        $this->Anuncio->incluirAnuncio($data_anuncio);
        
        $this->load->helper('url');
        redirect('/anuncio?cadastrado');

    }

    public function existeProduto($data){

        if ($data['tamanhoAro'] == null && $data['quantidadeMarcha'] == null && !isset($data['suspensaoDianteira']) && !isset($data['fullSuspension'])){
            
            return false;

        }
    
        return true;

    }

}
