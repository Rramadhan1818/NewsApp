<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class video_model extends CI_Model {

 function __construct()
 	{
 		$this->load->database();
 	}	
 	//listing
 	public function listing() {
 		$query = $this->db->get('video');
 		return $query->result();
	 }
	
	//listing video
	public function video() {
		$this->db->select('video.*, users.nama');
		$this->db->from('video');
		$this->db->join('users', 'users.id_user = video.id_user', 'LEFT');
		//Hanya untuk homepage
		$this->db->where('video.posisi','homepage');
		$this->db->order_by('id_video', 'DESC');
		$this->db->limit(20);
		$query = $this->db->get();
		return $query->result();
	}
	//listing home
 	public function home() {
		$this->db->select('video.*, users.nama');
		$this->db->from('video');
		$this->db->join('users', 'users.id_user = video.id_user', 'LEFT');
		//Hanya untuk homepage
		$this->db->where('video.posisi','homepage');
		$this->db->order_by('id_video', 'DESC');
		$this->db->limit(2);
		$query = $this->db->get();
		return $query->result();
	}
 	//detail(read)
 	public function detail($id_site) {
 		$query = $this->db->get_where('video',array('id_video' => $id_site ));
 		return $query->row();
 	}
 	//tambah
 	public function tambah($data){
 		$this->db->insert('video', $data);
 	}
 	//edit
 	public function edit($data){
 		$this->db->where('id_video', $data['id_video']);
 		$this->db->update('video', $data);
 	}
 	//delete
 	public function delete($data){
 		$this->db->where('id_video', $data['id_video']);
 		$this->db->delete('video', $data);
 	}

}