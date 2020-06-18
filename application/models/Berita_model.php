<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {

 function __construct()
 	{
 		$this->load->database();
 	}	
 	//listing
 	public function listing() {
 		$this->db->select('berita.*, kategori_berita.nama_kategori_berita, users.nama');
 		$this->db->from('berita');
 		//relasi users dan kategori berita
 		$this->db->join('kategori_berita', 'kategori_berita.id_kategori_berita = berita.id_kategori_berita', 'LEFT');
 		$this->db->join('users', 'users.id_user = berita.id_user', 'LEFT');
 		//end relasi
 		$this->db->order_by('id_berita', 'DESC');
 		$query = $this->db->get();
 		return $query->result();
 	}

 	//berita news
 	public function berita_news() {
 		$this->db->select('berita.*, kategori_berita.nama_kategori_berita, users.nama');
 		$this->db->from('berita');
 		//relasi users dan kategori berita
 		$this->db->join('kategori_berita', 'kategori_berita.id_kategori_berita = berita.id_kategori_berita', 'LEFT');
 		$this->db->join('users', 'users.id_user = berita.id_user', 'LEFT');
 		//end relasi
 		$this->db->where('status_berita', 'publish');
 		$this->db->order_by('id_berita', 'DESC');
 		//batasi jumlah berita yang tampil 
 		$this->db->limit(12);
 		$query = $this->db->get();
 		return $query->result();
 	}

 	//berita home
 	public function berita_home() {
 		$this->db->select('berita.*, kategori_berita.nama_kategori_berita, users.nama');
 		$this->db->from('berita');
 		//relasi users dan kategori berita
 		$this->db->join('kategori_berita', 'kategori_berita.id_kategori_berita = berita.id_kategori_berita', 'LEFT');
 		$this->db->join('users', 'users.id_user = berita.id_user', 'LEFT');
 		//end relasi
 		$this->db->where('status_berita', 'publish');
 		$this->db->order_by('id_berita', 'DESC');
 		//batasi jumlah berita yang tampil 
 		$this->db->limit(6);
 		$query = $this->db->get();
 		return $query->result();
 	}


 	//berita utama
 	public function berita_utama() {
 		$this->db->select('berita.*, kategori_berita.nama_kategori_berita, users.nama');
 		$this->db->from('berita');
 		//relasi users dan kategori berita
 		$this->db->join('kategori_berita', 'kategori_berita.id_kategori_berita = berita.id_kategori_berita', 'LEFT');
 		$this->db->join('users', 'users.id_user = berita.id_user', 'LEFT');
 		//end relasi
 		$this->db->where('status_berita', 'publish');
 		$this->db->order_by('id_berita', 'DESC');
 		$query = $this->db->get();
 		return $query->row();
 	}

 	//Read
 	public function read($slug_berita){
 		$query = $this->db->get_where('berita',
 				array('slug_berita' 	=> $slug_berita,
 					  'status_berita'	=> 'publish' ));
 		return $query->row();
 	}

 	//Detail(read)
 	public function detail($id_berita) {
 		$query = $this->db->get_where('berita',array('id_berita' => $id_berita ));
 		return $query->row();
 	}
 	//akhir
 	public function akhir(){
 		$query = $this->db->query('SELECT * FROM berita ORDER BY id_berita DESC');
 		return $query->row();
 	}
 	//tambah
 	public function tambah($data){
 		$this->db->insert('berita', $data);
 	}
 	//edit
 	public function edit($data){
 		$this->db->where('id_berita', $data['id_berita']);
 		$this->db->update('berita', $data);
 	}
 	//delete
 	public function delete($data){
 		$this->db->where('id_berita', $data['id_berita']);
 		$this->db->delete('berita', $data);
 	}

}
