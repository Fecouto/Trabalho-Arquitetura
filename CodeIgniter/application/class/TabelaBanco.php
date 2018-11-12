<?php

class TabelaBanco extends CI_Loader {

    public function create() {

        $this->load->dbforge;

        if (!$this->db->table_exists('anuncio')){
            $this->dbforge->create_database('anuncio');
            $fields_anuncio = array(
                'id' => array(
                        'type' => 'INT',
                        'null' => FALSE,
                        'auto_increment' => TRUE,
                        'primary_key' => TRUE
                ),
                'descricao' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                        'null' => FALSE,
                ),
                'tipo' => array(
                        'type' =>'VARCHAR',
                        'constraint' => '45',
                        'null' => FALSE,
                ),
                'preco' => array(
                        'type' => 'FLOAT',
                        'null' => FALSE,
                ),
                'date' => array(
                        'type' => 'DATETIME',
                        'null' => FALSE,
                ),
                'id_produto' => array(
                        'type' => 'INT',
                        'null' => FALSE,
                ),
            );

            $this->dbforge->add_field($fields_anuncio);
            
        }

        if (!$this->db->table_exists('anuncio')){
                
            $this->dbforge->create_database('produto');
            $fields_produto = array(
                'id' => array(
                        'type' => 'INT',
                        'null' => FALSE,
                        'auto_increment' => TRUE,
                        'primary_key' => TRUE
                ),
                'tamanhoAro' => array(
                        'type' => 'INT',
                        'null' => TRUE
                ),
                'quantidadeMarcha' => array(
                        'type' =>'INT',
                        'null' => TRUE
                ),
                'suspensaoDianteira' => array(
                        'type' => 'BOOLEAN',
                        'null' => TRUE
                ),
                'fullSuspension' => array(
                        'type' => 'BOOLEAN',
                        'null' => TRUE
                )
            );

            $this->dbforge->add_field($fields_produto);

        }

    }

}
