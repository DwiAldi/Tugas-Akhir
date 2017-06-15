<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model {
//class Buku_model extends CI_Model implements DatatableModel {

public function getBuku()
    {
        $this->db->select('*');
        $this->db->from('buku');
        $this->db->join('kategori', 'buku.id_kategori = kategori.id','left');
        $this->db->join('penerbit', 'buku.id_penerbit = penerbit.id', 'left');
        $this->db->join('pengarang', 'buku.id_pengarang = pengarang.id', 'left');
        $query = $this->db->get();
        return $query->result();

        // $query = $this->db->query("SELECT * from buku");

        // return $query->result_array();
    }
    
    public function getBukuByKategori($idKategori)
        {
            // $this->db->select("kategori.nama as namaKategori,foto,judul, pengarang,penerbit");
            // $this->db->where('id_kategori', $idKategori); 
            // $this->db->join('kategori', 'kategori.id = buku.id_kategori', 'left');  
            // $query = $this->db->get('buku');
            // return $query->result();
            $this->db->select("*");
            $this->db->where('id_kategori', $idKategori); 
            $this->db->join('kategori', 'kategori.id = buku.id_kategori', 'left');
            $this->db->join('penerbit', 'buku.idBuku = penerbit.id', 'left'); 
            $this->db->join('pengarang', 'buku.id_pengarang = pengarang.id', 'left'); 
            $query = $this->db->get('buku');
            return $query->result();
        }


   
}

