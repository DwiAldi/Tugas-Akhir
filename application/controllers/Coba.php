<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Coba extends CI_Controller {

	public function __construct() {
        parent::__construct();
       
    }

      public function index()
    {
        $page = 'buku';
        $data['title'] = ucfirst($page);
        $this->load->view('template/header');
        $this->load->view($page);
        $this->load->view('template/footer');
    }

   


}

   