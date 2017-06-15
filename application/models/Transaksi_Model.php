<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Transaksi_Model extends CI_Model {
	
	public function getIdByUsername($username)
	{
		$this->db->select('id');
		$this->db->where('username',$username);
		$query = $this->db->get('user');
		return $query->result();
	}		
	
	public function getBukuAll()
	{
		$this->db->select('*');
			$this->db->from('buku');
			$this->db->join('kategori', 'buku.id_kategori = kategori.id');
			$this->db->join('pengarang', 'buku.id_pengarang = pengarang.id');
			$this->db->join('penerbit', 'buku.id_penerbit = penerbit.id');
			$query = $this->db->get();
			return $query->result_array();
	}

	public function hitung_pinjam($fk_user)
	{
		$this->db->where('fk_user',$fk_user);
		$this->db->where('status','periode_peminjaman');
		$query=$this->db->count_all_results('peminjaman');
		// var_dump($this->db->last_query());
		// var_dump($query);
		// die();
		if($query >= 5){
			return false;
		}else{
			return true;
		}
	}

	public function insertPeminjamanByJml($fk_user)
	{

		$tgl=date('Ymd');
		$tglKembali=date('Ymd',strtotime('+14 days',strtotime($tgl)));
		$object = array(
			'tgl_pinjam' => $tgl,
			'tgl_kembali' => $tglKembali,
			'fk_buku' => $this->input->post('fk_buku'),
			'fk_user' => $fk_user,
			 );
		$this->db->insert('peminjaman',$object);
	}

	public function getDataTransaksi()
	{
		// $this->db->select('id_peminjaman,nama,nim,buku,tgl_pinjam as tanggalpinjam, tgl_kembali as tanggalkembali,status');
		// $query = $this->db->get('peminjaman');
		// return $query->result();
		$this->db->select('*');
		$this->db->from('peminjaman');
		$this->db->join('buku', 'peminjaman.fk_buku = buku.idBuku');
		$this->db->join('user', 'peminjaman.fk_user = user.id');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getUserByPeminjaman($fk_user)
	{
			$this->db->select('*');
			$this->db->from('peminjaman');
			$this->db->join('buku', 'peminjaman.fk_buku = buku.idBuku');
			$this->db->join('user', 'peminjaman.fk_user = user.id');
			$this->db->where('peminjaman.fk_user', $fk_user);
			$this->db->where('peminjaman.status="periode_peminjaman"');
			$query = $this->db->get();
			return $query->result_array();

	}

}
	
	/* End of file transaksi.php */
	/* Location: ./application/models/transaksi.php */
?>