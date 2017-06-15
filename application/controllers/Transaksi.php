<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function index()
	{
		$this->load->model('Transaksi_Model');
		$data["transaksi"] = $this->Transaksi_Model->getDataTransaksi();
		$this->load->view('transaksi',$data);
	}

	public function peminjamanBuku()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama Peminjam', 'trim|required');
		$this->form_validation->set_rules('buku1', 'Buku ke-1', 'trim|required');
		$this->form_validation->set_rules('tanggalPeminjaman', 'Tanggal Meminjam', 'trim|required');
		$this->form_validation->set_rules('tanggalPengembalian', 'Tanggal Pengembalian', 'trim|required');
		$this->load->model('Transaksi_Model');
		$data['peminjam'] = $this->Transaksi_Model->getComboBoxUser();
		$data['buku']=$this->Transaksi_Model->getComboBoxBuku();
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('peminjaman', $data);
		}else{
				$this->Transaksi_Model->insert();
				$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Tambah Buku berhasil</div></div>");
				redirect('Buku_Admin');
		}	
	}

	public function transaksiUser($fk_user)
	{
		$this->load->model('Transaksi_Model');
		$data['user_pinjam'] = $this->Transaksi_Model->getUserByPeminjaman($fk_user);
		$this->load->view('peminjaman_user', $data);
	}

	public function pdf()
	{
		$this->load->model('Transaksi_Model');
		$data["transaksi"] = $this->Transaksi_Model->getDataTransaksi();
		$this->load->view('transaksi_pdf',$data);
	}

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */