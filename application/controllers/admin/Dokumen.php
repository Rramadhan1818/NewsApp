<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen extends CI_Controller {

	//load data base
	public function __construct(){
		parent::__construct();
		$this->load->model('dokumen_model'); //data dokumen model
		$this->load->model('kategori_dokumen_model'); //data kategori dokumen model
	}

	//index
	 public function index(){
	 $dokumen = $this->dokumen_model->listing();
	 $data = array('title' => 'Data dokumen',
	 				'dokumen' => $dokumen,
	 				'isi'  => 'admin/dokumen/list');
	 $this->load->view('admin/layout/wrapper',$data);
	}

	//tambah
	 public function tambah(){
	 $kategori = $this->kategori_dokumen_model->listing();
	 $akhir		= $this->dokumen_model->akhir();
	
	//validation
	 $v = $this->form_validation;
	 $v->set_rules('judul', 'Judul', 'required',
				   array('required' => 'Judul harus diisi' ));

	 $v->set_rules('judul', 'Judul', 'required',
				   array('required' => 'Judul harus diisi' ));

	 $v->set_rules('isi', 'Isi', 'required',
				   array('required' => 'Isi dokumen harus diisi' ));

	 $v->set_rules('judul', 'Judul', 'required',
				   array('required' => 'Judul harus diisi' ));

if($v->run()) {

	$config['upload_path'] 		= './assets/upload/image/thumbs/'; //lokasi folder upload
	$config['allowed_types'] 	= 'gif|jpg|png|svg|tiff|doc|docx|xls|xlsx|pdf|ppt|pptx|mp4|gp|avi|msv|flv'; //format file yang diizinkan
	$config['max_size']			= '15000'; // KB ukuran maksimal	
	$this->load->library('upload', $config);
	if(! $this->upload->do_upload('gambar')) {

	 $data = array('title' => 'Tambah dokumen',
	 				'kategori' => $kategori,
	 				'error'		=> $this->upload->display_errors(),
	 				'isi'  => 'admin/dokumen/tambah');
	 $this->load->view('admin/layout/wrapper',$data);

	 // Masuk database
		}else{
				$upload_data				= array('uploads' =>$this->upload->data());

			$i 			= $this->input;
			$url_akhir	= $akhir->id_dokumen+1;
			$slug 		= $url_akhir.'-'.url_title($i->post('judul'),'dash', TRUE);
			$data = array(	'slug_dokumen'			=> $slug,
							'judul'					=> $i->post('judul'),
							'id_kategori_dokumen'	=> $i->post('id_kategori_dokumen'),
							'isi'					=> $i->post('isi'),
							'gambar'				=> $upload_data['uploads']['file_name'],
							'id_user'				=> $this->session->userdata('id'),
							'status_dokumen'		=> $i->post('status_dokumen'),
							'jenis_dokumen'			=> $i->post('jenis_dokumen')
							);
			$this->dokumen_model->tambah($data);
			$this->session->set_flashdata('sukses','Dokumen telah ditambah');
			redirect(base_url('admin/dokumen'));
		}
	}
		// End masuk database

	 $data = array('title' => 'Tambah dokumen',
	 				'kategori' => $kategori,
	 				'isi'  => 'admin/dokumen/tambah');
	 $this->load->view('admin/layout/wrapper',$data);
	} 

	//edit
	 public function edit($id_dokumen){
	 $dokumen    = $this->dokumen_model->detail($id_dokumen); 
	 $kategori  = $this->kategori_dokumen_model->listing();
	 $akhir		= $this->dokumen_model->akhir();
	
	//validation
	 $v = $this->form_validation;
	 $v->set_rules('judul', 'Judul', 'required',
				   array('required' => 'Judul harus diisi' ));

	 $v->set_rules('judul', 'Judul', 'required',
				   array('required' => 'Judul harus diisi' ));

	 $v->set_rules('isi', 'Isi', 'required',
				   array('required' => 'Isi dokumen harus diisi' ));

	 $v->set_rules('judul', 'Judul', 'required',
				   array('required' => 'Judul harus diisi' ));

if($v->run()) {
	//kalau ada gambar
	if(!empty($_FILES['gambar']['name'])) {

	$config['upload_path'] 		= './assets/upload/image/thumbs/'; //lokasi folder upload
	$config['allowed_types'] 	= 'gif|jpg|png|svg|tiff|doc|docx|xls|xlsx|pdf|ppt|pptx|mp4|gp|avi|msv|flv'; //format file yang diizinkan
	$config['max_size']			= '15000'; // KB ukuran maksimal	
	$this->load->library('upload', $config);
	if(! $this->upload->do_upload('gambar')) {

	 $data = array('title' 		=> 'Edit dokumen',
	 				'kategori' 	=> $kategori,
	 				'dokumen'	=> $dokumen,
	 				'error'		=> $this->upload->display_errors(),
	 				'isi'  		=> 'admin/dokumen/edit');
	 $this->load->view('admin/layout/wrapper',$data);

	 // Masuk database
		}else{
				$upload_data				= array('uploads' =>$this->upload->data());

				//hapus gambar lama
			if($dokumen->gambar != "") {
			unlink('./assets/upload/image/'.$dokumen->gambar);
			unlink('./assets/upload/image/thumbs'.$dokumen->gambar);
			}
				//end hapus gambar lama
				
			$i 			= $this->input;
			$data = array(	'id_dokumen'			=> $id_dokumen,
							'judul'					=> $i->post('judul'),
							'id_kategori_dokumen'	=> $i->post('id_kategori_dokumen'),
							'isi'					=> $i->post('isi'),
							'gambar'				=> $upload_data['uploads']['file_name'],
							'id_user'				=> $this->session->userdata('id'),
							'status_dokumen'		=> $i->post('status_dokumen'),
							'jenis_dokumen'			=> $i->post('jenis_dokumen')
							);

			$this->dokumen_model->edit($data);
			$this->session->set_flashdata('sukses','Dokumen telah diedit');
			redirect(base_url('admin/dokumen'));
			}}else{
			//edit tanpa ganti gambar
			$i 			= $this->input;
			$data = array(	'id_dokumen'			=> $id_dokumen,
							'judul'					=> $i->post('judul'),
							'id_kategori_dokumen'	=> $i->post('id_kategori_dokumen'),
							'isi'					=> $i->post('isi'),
							'id_user'				=> $this->session->userdata('id'),
							'status_dokumen'		=> $i->post('status_dokumen'),
							'jenis_dokumen'			=> $i->post('jenis_dokumen')
							);

			$this->dokumen_model->edit($data);
			$this->session->set_flashdata('sukses','Dokumen telah diedit');
			redirect(base_url('admin/dokumen'));
		}}
		// End masuk database
		
	 $data = array('title' => 'Edit dokumen',
	 				'kategori' => $kategori,
	 				'dokumen'	=> $dokumen,
	 				'isi'  => 'admin/dokumen/edit');
	 $this->load->view('admin/layout/wrapper',$data);
	} 

	//download
	public function download($id_dokumen){
		$dokumen = $this->dokumen_model->detail($id_dokumen);

		//function download 
		$this->load->helper('download');
		$file = $dokumen->gambar;
		force_download('./assets/upload/image/thumbs/'.$file, NULL);
	} 



	//delete
	public function delete($id_dokumen) {
		$dokumen = $this->dokumen_model->detail($id_dokumen);
		//hapus gambar
		if($dokumen->gambar != "") {
			unlink('./assets/upload/image/'.$dokumen->gambar);
			unlink('./assets/upload/image/thumbs'.$dokumen->gambar);
		}
		//end hapus gambar
		$data = array( 'id_dokumen' => $id_dokumen );
		$this->dokumen_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data dokumen telah dihapus');
		redirect(base_url('admin/dokumen'));
	}

}