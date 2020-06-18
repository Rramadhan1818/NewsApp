<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Document extends CI_Controller {

	//load data base
	public function __construct(){
		parent::__construct();
		$this->load->model('dokumen_model'); //data document model
		$this->load->model('kategori_dokumen_model'); //data kategori dokumen model
	}

	//index
	public function index(){

		//kalo login
		if($this->session->userdata('username') != "") {
			$dokumen = $this->dokumen_model->listing();
		}else{
		//untuk yang tdk login
			$dokumen = $this->dokumen_model->external();
		}

		$data = array( 'title' 		=>	'Latest Document',
						'dokumen'	=>	 $dokumen,
						'isi'		=> 	'document/list');
		$this->load->view('layout/wrapper', $data);
	}

	//category
	public function category($id_kategori_dokumen){
		$kategori = $this->kategori_dokumen_model->detail($id_kategori_dokumen);

		//kalo login
		if($this->session->userdata('username') != "") {
			$dokumen = $this->dokumen_model->kategori($id_kategori_dokumen);
		}else{
		//untuk yang tdk login
			$dokumen = $this->dokumen_model->kategori_external($id_kategori_dokumen);
		}

		$data = array( 'title' 		=>	 $kategori->nama_kategori_dokumen,
						'dokumen'	=>	 $dokumen,
						'isi'		=> 	'document/list');
		$this->load->view('layout/wrapper', $data);
	}


	//download
	public function download($id_dokumen){
		$dokumen = $this->dokumen_model->detail($id_dokumen);

		//function download 
		$this->load->helper('download');
		$file = $dokumen->gambar;
		force_download('./assets/upload/image/thumbs/'.$file, NULL);
	} 

	//read
	public function read($slug_dokumen)	{
		$dokumen  = $this->dokumen_model->read($slug_dokumen);

		$data = array( 'title' 		=>	 $dokumen->judul,
						'dokumen'	=>	 $dokumen,
						'isi'		=> 	'document/read');
		$this->load->view('layout/wrapper', $data);

	}

}
