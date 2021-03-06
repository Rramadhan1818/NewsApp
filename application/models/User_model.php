<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
//listing
	public function listing(){
		$this->db->select('users.*, site.nama_site');
		$this->db->from('users');
		// Relasi dengan table SITE
		$this->db->join('site', 'site.id_site = users.id_site', 'LEFT');
		$this->db->order_by('id_user', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

		//Detail
		public function detail($id_user) {
		$query = $this->db->get_where('users', array('id_user' => $id_user));
		return $query->row();
	}
	//tambah
 	public function tambah($data){
 		$this->db->insert('users', $data);
 	}
 	//edit
 	public function edit($data){
 		$this->db->where('id_user', $data['id_user']);
 		$this->db->update('users', $data);
 	}
 	//delete
 	public function delete($data){
 		$this->db->where('id_user', $data['id_user']);
 		$this->db->delete('users', $data);
 	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */

