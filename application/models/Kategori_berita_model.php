<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_berita_model extends CI_Model {

 function __construct()
 	{
 		$this->load->database();
 	}	
 	//listing
 	public function listing() {
 		$query = $this->db->get('kategori_berita');
 		return $query->result();
 	}
 	//detail(read)
 	public function detail($id_site) {
 		$query = $this->db->get_where('kategori_berita',array('id_kategori_berita' => $id_site ));
 		return $query->row();
 	}
 	//tambah
 	public function tambah($data){
 		$this->db->insert('kategori_berita', $data);
 	}
 	//edit
 	public function edit($data){
 		$this->db->where('id_kategori_berita', $data['id_kategori_berita']);
 		$this->db->update('kategori_berita', $data);
 	}
 	//delete
 	public function delete($data){
 		$this->db->where('id_kategori_berita', $data['id_kategori_berita']);
 		$this->db->delete('kategori_berita', $data);
 	}

}