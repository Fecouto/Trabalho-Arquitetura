<?php

class AnunciosController extends CI_Controller {

    public function index() {

        $data['hasSearch'] = false;
        $this->load->view('anuncios/inserir', $data);

    }

    public function salvar() {

        $data = $this->input->post();
        
        //print_r($data); die();
        
        // chamar model passando $data
        $this->load->model('Anuncios');
        $this->Anuncios->insert($data);
        //$this->db->inserir($data);

    }

}
