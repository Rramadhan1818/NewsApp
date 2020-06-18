<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi_model extends CI_Model {

 function __construct()
 	{
 		$this->load->database();
 	}	
 	//listing
 	public function listing() {
 		$query = $this->db->get('konfigurasi');
 		return $query->row();
 	}
 	//detail(read)
 	public function detail($id_konfigurasi) {
 		$query = $this->db->get_where('konfigurasi',array('id_konfigurasi' => $id_konfigurasi ));
 		return $query->row();
 	}
 	//tambah
 	public function tambah($data){
 		$this->db->insert('konfigurasi', $data);
 	}
 	//edit
 	public function edit($data){
 		$this->db->where('id_konfigurasi', $data['id_konfigurasi']);
 		$this->db->update('konfigurasi', $data);
 	}
 	//delete
 	public function delete($data){
 		$this->db->where('id_konfigurasi', $data['id_konfigurasi']);
 		$this->db->delete('konfigurasi', $data);
 	}

}
