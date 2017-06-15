<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Buku_model');
    }

      public function daftarBuku()
    {
        $this->load->model('Buku_model');
        $data['buku']=$this->Buku_model->getBuku();
        $this->load->view('buku', $data);
    }

    public function index($idKategori)
    {
        $this->load->model('buku_model');        
        $data["kategori_list"] = $this->buku_model->getBukuByKategori($idKategori);
        $this->load->view('data_buku', $data);
    }


}

   