<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen_model extends CI_Model {

 function __construct(){

 		$this->load->database();
 	}	
 	//listing
 	public function listing() {
 		$this->db->select('dokumen.*, kategori_dokumen.nama_kategori_dokumen, users.nama');
 		$this->db->from('dokumen');
 		//relasi users dan kategori dokumen
 		$this->db->join('kategori_dokumen', 'kategori_dokumen.id_kategori_dokumen = dokumen.id_kategori_dokumen', 'LEFT');
 		$this->db->join('users', 'users.id_user = dokumen.id_user', 'LEFT');
 		//end relasi
 		$this->db->order_by('id_dokumen', 'DESC');
 		$query = $this->db->get();
 		return $query->result();
 	}

 	//listing external
 	public function external() {
 		$this->db->select('dokumen.*, kategori_dokumen.nama_kategori_dokumen, users.nama');
 		$this->db->from('dokumen');
 		//relasi users dan kategori dokumen
 		$this->db->join('kategori_dokumen', 'kategori_dokumen.id_kategori_dokumen = dokumen.id_kategori_dokumen', 'LEFT');
 		$this->db->join('users', 'users.id_user = dokumen.id_user', 'LEFT');
 		//end relasi
 		$this->db->where(array('status_dokumen'		=> 'publish',
 								'jenis_dokumen'		=> 'external')); 
 		$this->db->order_by('id_dokumen', 'DESC');
 		$query = $this->db->get();
 		return $query->result();
 	}

 	//listing kategori
 	public function kategori($id_kategori_dokumen) {
 		$this->db->select('dokumen.*, kategori_dokumen.nama_kategori_dokumen, users.nama');
 		$this->db->from('dokumen');
 		//relasi users dan kategori dokumen
 		$this->db->join('kategori_dokumen', 'kategori_dokumen.id_kategori_dokumen = dokumen.id_kategori_dokumen', 'LEFT');
 		$this->db->join('users', 'users.id_user = dokumen.id_user', 'LEFT');
 		//end relasi
 		$this->db->where('dokumen.id_kategori_dokumen', $id_kategori_dokumen); 
 		$this->db->order_by('id_dokumen', 'DESC');
 		$query = $this->db->get();
 		return $query->result();
 	}

 	//listing kategori untuk external
 	public function kategori_external($id_kategori_dokumen) {
 		$this->db->select('dokumen.*, kategori_dokumen.nama_kategori_dokumen, users.nama');
 		$this->db->from('dokumen');
 		//relasi users dan kategori dokumen
 		$this->db->join('kategori_dokumen', 'kategori_dokumen.id_kategori_dokumen = dokumen.id_kategori_dokumen', 'LEFT');
 		$this->db->join('users', 'users.id_user = dokumen.id_user', 'LEFT');
 		//end relasi
 		$this->db->where( array('dokumen.id_kategori_dokumen' => $id_kategori_dokumen,
 								'status_dokumen'		=> 'publish',
 								'jenis_dokumen'		=> 'external')); 
 		$this->db->order_by('id_dokumen', 'DESC');
 		$query = $this->db->get();
 		return $query->result();
 	}

 	//Read
 	public function read($slug_dokumen){
 		$this->db->select('dokumen.*, kategori_dokumen.nama_kategori_dokumen, users.nama');
 		$this->db->from('dokumen');
 		//relasi users dan kategori dokumen
 		$this->db->join('kategori_dokumen', 'kategori_dokumen.id_kategori_dokumen = dokumen.id_kategori_dokumen', 'LEFT');
 		$this->db->join('users', 'users.id_user = dokumen.id_user', 'LEFT');
 		//end relasi
 		$this->db->where('slug_dokumen', $slug_dokumen); 
 		$this->db->order_by('id_dokumen', 'DESC');
 		$query = $this->db->get();
 		return $query->row();
 	}

 	//Detail(read)
 	public function detail($id_dokumen) {
 		$query = $this->db->get_where('dokumen',array('id_dokumen' => $id_dokumen ));
 		return $query->row();
 	}
 	//akhir
 	public function akhir(){
 		$query = $this->db->query('SELECT * FROM dokumen ORDER BY id_dokumen DESC');
 		return $query->row();
 	}
 	//tambah
 	public function tambah($data){
 		$this->db->insert('dokumen', $data);
 	}
 	//edit
 	public function edit($data){
 		$this->db->where('id_dokumen', $data['id_dokumen']);
 		$this->db->update('dokumen', $data);
 	}
 	//delete
 	public function delete($data){
 		$this->db->where('id_dokumen', $data['id_dokumen']);
 		$this->db->delete('dokumen', $data);
 	}

}
