<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_berita extends CI_Controller {

	//load data base
	public function __construct(){
		parent::__construct();
		$this->load->model('kategori_berita_model'); //data Kategori_berita
	}

	//index
	 public function index(){

	 $kategori_berita = $this->kategori_berita_model->listing();
	 //valid
	 $valid = $this->form_validation;
	 $valid->set_rules('nama_kategori_berita', 'Nama kategori berita', 'required|is_unique[kategori_berita.nama_kategori_berita]',
						array('required' 	=> 'Kategori berita harus diisi',
							  'is_unique'	=> 'Ooops kategori berita : <strong>'. $this->input->post('nama_kategori_berita') .'</strong> sudah ada. Buat kategori baru' ));
	 if($valid->run() === FALSE){
	 $data = array('title' 				=> 'Data Kategori berita',
	 				'kategori_berita'   => $kategori_berita,
	 				'isi'  				=> 'admin/kategori_berita/list');
	 $this->load->view('admin/layout/wrapper',$data);
	}else{
		$i=$this->input;
			$slug = url_title($this->input->post('nama_kategori_berita'), 'dash', TRUE);
			$data = array('nama_kategori_berita' => $i->post('nama_kategori_berita'),
						  'slug_kategori_berita' => $slug,
						  'urutan'				 => $i->post('urutan'),
						  'keterangan' 			 => $i->post('keterangan')
							 );	
			$this->kategori_berita_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data berhasil di tambah');
			redirect(base_url('admin/kategori_berita'));
		}	
		//end masuk databse
	}

	//edit
	public function edit($id_kategori_berita){
	 $kategori_berita = $this->kategori_berita_model->detail($id_kategori_berita);
	 //valid
	 $valid = $this->form_validation;
	 $valid->set_rules('nama_kategori_berita', 'Nama kategori berita', 'required',
						array('required' 	=> 'Kategori berita harus diisi'));
	 if($valid->run() === FALSE){
	 $data = array('title' 				=> 'Edit Kategori berita',
	 				'kategori_berita'   => $kategori_berita,
	 				'isi'  				=> 'admin/kategori_berita/edit');
	 $this->load->view('admin/layout/wrapper',$data);
	}else{
		$i=$this->input;
			$data = array('id_kategori_berita'	 => $id_kategori_berita,
						  'nama_kategori_berita' => $i->post('nama_kategori_berita'),
						  'urutan'				 => $i->post('urutan'),
						  'keterangan' 			 => $i->post('keterangan')
							 );	
			$this->kategori_berita_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data berhasil di edit');
			redirect(base_url('admin/kategori_berita'));
		}	
		//end masuk databse
	}

	//delete
	public function delete($id_kategori_berita) {

		$data = array( 'id_kategori_berita' => $id_kategori_berita );
		$this->kategori_berita_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data kategori berita telah dihapus');
		redirect(base_url('admin/kategori_berita'));
	}


}