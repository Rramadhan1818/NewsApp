<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_dokumen extends CI_Controller {

	//load data base
	public function __construct(){
		parent::__construct();
		$this->load->model('kategori_dokumen_model'); //data Kategori_dokumen
	}

	//index
	 public function index(){

	 $kategori_dokumen = $this->kategori_dokumen_model->listing();
	 //valid
	 $valid = $this->form_validation;
	 $valid->set_rules('nama_kategori_dokumen', 'Nama kategori dokumen', 'required|is_unique[kategori_dokumen.nama_kategori_dokumen]',
						array('required' 	=> 'Kategori dokumen harus diisi',
							  'is_unique'	=> 'Ooops kategori dokumen : <strong>'. $this->input->post('nama_kategori_dokumen') .'</strong> sudah ada. Buat kategori baru' ));
	 if($valid->run() === FALSE){
	 $data = array('title' 				=> 'Data Kategori dokumen',
	 				'kategori_dokumen'   => $kategori_dokumen,
	 				'isi'  				=> 'admin/kategori_dokumen/list');
	 $this->load->view('admin/layout/wrapper',$data);
	}else{
		$i=$this->input;
			$slug = url_title($this->input->post('nama_kategori_dokumen'), 'dash', TRUE);
			$data = array('nama_kategori_dokumen' => $i->post('nama_kategori_dokumen'),
						  'slug_kategori_dokumen' => $slug,
						  'urutan'				 => $i->post('urutan'),
						  'keterangan' 			 => $i->post('keterangan')
							 );	
			$this->kategori_dokumen_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data berhasil di tambah');
			redirect(base_url('admin/kategori_dokumen'));
		}	
		//end masuk databse
	}

	//edit
	public function edit($id_kategori_dokumen){
	 $kategori_dokumen = $this->kategori_dokumen_model->detail($id_kategori_dokumen);
	 //valid
	 $valid = $this->form_validation;
	 $valid->set_rules('nama_kategori_dokumen', 'Nama kategori dokumen', 'required',
						array('required' 	=> 'Kategori dokumen harus diisi'));
	 if($valid->run() === FALSE){
	 $data = array('title' 				=> 'Edit Kategori dokumen',
	 				'kategori_dokumen'   => $kategori_dokumen,
	 				'isi'  				=> 'admin/kategori_dokumen/edit');
	 $this->load->view('admin/layout/wrapper',$data);
	}else{
		$i=$this->input;
			$data = array('id_kategori_dokumen'	 => $id_kategori_dokumen,
						  'nama_kategori_dokumen' => $i->post('nama_kategori_dokumen'),
						  'urutan'				 => $i->post('urutan'),
						  'keterangan' 			 => $i->post('keterangan')
							 );	
			$this->kategori_dokumen_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data berhasil di edit');
			redirect(base_url('admin/kategori_dokumen'));
		}	
		//end masuk databse
	}

	//delete
	public function delete($id_kategori_dokumen) {

		$data = array( 'id_kategori_dokumen' => $id_kategori_dokumen );
		$this->kategori_dokumen_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data kategori dokumen telah dihapus');
		redirect(base_url('admin/kategori_dokumen'));
	}


}