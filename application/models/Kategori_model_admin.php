<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Kategori_model_admin extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	
	public function getKategori()
    {
        $query = $this->db->query("SELECT * from kategori");

        return $query->result_array();
    }

    public function getDataKategoriAdmin()
	{
		$this->db->select("id,namaKategori,deskripsiKategori");
		$query = $this->db->get('kategori');
		return $query->result();
	}

	 public function getKategoriById($id)
	{
		$this->db->where('id', $id);	
		$query = $this->db->get('kategori',1);
		return $query->result();
	}

	public function insertKategori()
	{
		$insert_kategori = array(
			'namaKategori' => $this->input->post('nama'),
			'deskripsiKategori' => $this->input->post('deskripsi'),
		);
		$this->db->insert('kategori', $insert_kategori);
	}

	public function updateKategori($id)
	{
		$data = array(
			'namaKategori' => $this->input->post('nama'),
			'deskripsiKategori' => $this->input->post('deskripsi'),
		);
		$this->db->where('id', $id);
		$this->db->update('kategori', $data);
	}

	public function updateKategoriTanpaFoto($id)
		{
			$data = array(
				'namaKategori' => $this->input->post('nama'),
				'deskripsiKategori' => $this->input->post('deskripsi'),
			);
			$this->db->where('id', $id);
			$this->db->update('kategori', $data);
		}

	public function deleteKategori($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('kategori');
	}

	public function m_delete($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function kategoriTerdaftar($id_kategori)
	{
		$this->db->select('id_kategori');
		$this->db->from('buku');
		$this->db->where('id_kategori', $id_kategori);
		$query = $this->db->get();

		if ($query->num_rows()>0) {
			return true;
		}else{
			return false;
		}
	}

	public function cekKategoriGanda($namaKategori)
	{
		$this->db->select('namaKategori');
		$this->db->from('kategori');
		$this->db->where('namaKategori', $namaKategori);
		$query = $this->db->get();
		if ($query->num_rows()>0) {
			return true;
		} else {
			return false;
		}
		
	}

}
	
	/* End of file Kategori_model_admin.php */
	/* Location: ./application/models/Kategori_model_admin.php */
 ?>