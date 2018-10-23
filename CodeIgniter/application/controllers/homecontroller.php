<?php

class Homecontroller extends CI_Controller {
  
    function index() {
        /*carrega a nossa view */
        $this->load->view('index');
    }

}

