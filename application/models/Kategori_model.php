<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori_model extends CI_Model {
		
	private $table;
	
	public function __construct()
	{
		
		parent::__construct();
		$this->table = 'kategori';
	}
	
	public function getKategori()
    {
        $query = $this->db->query("SELECT * from kategori");

        return $query->result_array();
    }

    public function getKategoriById($id)
	{
		$this->db->where('id', $id);	
		$query = $this->db->get('kategori',1);
		return $query->result();
	}

    public function getDataKategori()
		{
			$this->db->select("id,namaKategori");
			$query = $this->db->get('kategori');
			return $query->result();
		}

	// public function getDataKategoriAdmin()
	// {
	// 	$this->db->select("id,namaKategori,deskripsiKategori");
	// 	$query = $this->db->get('kategori');
	// 	return $query->result();
	// }
	
	// public function insertKategori()
	// {
	// 	$insert_kategori = array(
	// 		'namaKategori' => $this->input->post('nama'),
	// 		'deskripsiKategori' => $this->input->post('deskripsi'),
	// 	);
	// 	$this->db->insert('kategori', $insert_kategori);
	// }

	// public function updateKategori($id)
	// {
	// 	$data = array(
	// 		'namaKategori' => $this->input->post('nama'),
	// 		'deskripsiKategori' => $this->input->post('deskripsi'),
	// 	);
	// 	$this->db->where('id', $id);
	// 	$this->db->update('kategori', $data);
	// }

	// public function updateKategoriTanpaFoto($id)
	// 	{
	// 		$data = array(
	// 			'namaKategori' => $this->input->post('nama'),
	// 			'deskripsiKategori' => $this->input->post('deskripsi'),
	// 		);
	// 		$this->db->where('id', $id);
	// 		$this->db->update('kategori', $data);
	// 	}

}

/* End of file product_model.php */
/* Location: ./application/models/product_model.php */