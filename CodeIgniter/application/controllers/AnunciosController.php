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
        
         //die();

        $data_produto = $data['produto'];

        $boolean = $this->existeProduto($data_produto);

        if($boolean){
            $this->load->model('Produto');
            $id_produto = $this->Produto->insert($data_produto);
            
        }
        else{
            $id_produto = null;
        }
        
        $data_anuncio = $data['anuncio'];
        $data_anuncio['id_produto'] = $id_produto;
        $this->load->model('Anuncio');
        $this->Anuncio->insert($data_anuncio);
        
        $this->load->helper('url');
        redirect('/anuncio?cadastrado');

    }

    public function existeProduto($data){

        if ($data['tamanhoAro'] == null && $data['quantidadeMarcha'] == null && !isset($data['suspensaoDianteira']) && !isset($data['fullSuspension'])){
            print_r($data);
            return false;

        }
    
        return true;

    } 

}
