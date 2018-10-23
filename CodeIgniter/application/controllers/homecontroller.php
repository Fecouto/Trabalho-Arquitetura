<?php

class Homecontroller extends CI_Controller {
  
    public function index() {

        $data['hasSearch'] = false;
        $this->load->view('index', $data);

    }

}
