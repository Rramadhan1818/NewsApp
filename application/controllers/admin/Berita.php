<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	//load data base
	public function __construct(){
		parent::__construct();
		$this->load->model('berita_model'); //data berita model
		$this->load->model('kategori_berita_model'); //data kategori berita model
	}

	//index
	 public function index(){
	 $berita = $this->berita_model->listing();
	 $data = array('title' => 'Data berita',
	 				'berita' => $berita,
	 				'isi'  => 'admin/berita/list');
	 $this->load->view('admin/layout/wrapper',$data);
	}

	//tambah
	 public function tambah(){
	 $kategori = $this->kategori_berita_model->listing();
	 $akhir		= $this->berita_model->akhir();
	
	//validation
	 $v = $this->form_validation;
	 $v->set_rules('judul', 'Judul', 'required',
				   array('required' => 'Judul harus diisi' ));

	 $v->set_rules('isi', 'Isi', 'required',
				   array('required' => 'Isi berita harus diisi' ));

if($v->run()) {

	$config['upload_path'] 		= './assets/upload/image/thumbs/'; //lokasi folder upload
	$config['allowed_types'] 	= 'gif|jpg|png|svg|tiff'; //format file yang diizinkan
	$config['max_size']			= '15000'; // KB ukuran maksimal	
	$this->load->library('upload', $config);
	if(! $this->upload->do_upload('gambar')) {

	 $data = array('title' => 'Tambah berita',
	 				'kategori' => $kategori,
	 				'error'		=> $this->upload->display_errors(),
	 				'isi'  => 'admin/berita/tambah');
	 $this->load->view('admin/layout/wrapper',$data);

	 // Masuk database
		}else{
				$upload_data				= array('uploads' =>$this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/image/'.$upload_data['uploads']['file_name']; 
				$config['new_image'] 		= './assets/upload/image/thumbs/';
				$config['create_thumb'] 	= TRUE;
				$config['quality'] 			= "100%";
				$config['maintain_ratio'] 	= TRUE;
				$config['width'] 			= 360; // Pixel
				$config['height'] 			= 360; // Pixel
				$config['x_axis'] 			= 0;
				$config['y_axis'] 			= 0;
				$config['thumb_marker'] 	= '';
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				
			$i 			= $this->input;
			$url_akhir	= $akhir->id_berita+1;
			$slug 		= $url_akhir.'-'.url_title($i->post('judul'),'dash', TRUE);
			$data = array(	'slug_berita'			=> $slug,
							'judul'					=> $i->post('judul'),
							'id_kategori_berita'	=> $i->post('id_kategori_berita'),
							'isi'					=> $i->post('isi'),
							'gambar'				=> $upload_data['uploads']['file_name'],
							'id_user'				=> $this->session->userdata('id'),
							'status_berita'			=> $i->post('status_berita'),
							'jenis_berita'			=> $i->post('jenis_berita')
							);
			$this->berita_model->tambah($data);
			$this->session->set_flashdata('sukses','Berita telah ditambah');
			redirect(base_url('admin/berita'));
		}
	}
		// End masuk database

	 $data = array('title' => 'Tambah berita',
	 				'kategori' => $kategori,
	 				'isi'  => 'admin/berita/tambah');
	 $this->load->view('admin/layout/wrapper',$data);
	} 

	//edit
	 public function edit($id_berita){
	 $berita    = $this->berita_model->detail($id_berita); 
	 $kategori  = $this->kategori_berita_model->listing();
	 $akhir		= $this->berita_model->akhir();
	
	//validation
	 $v = $this->form_validation;
	 $v->set_rules('judul', 'Judul', 'required',
				   array('required' => 'Judul harus diisi' ));

	 $v->set_rules('isi', 'Isi', 'required',
				   array('required' => 'Isi berita harus diisi' ));


if($v->run()) {
	//kalau ada gambar
	if(!empty($_FILES['gambar']['name'])) {

	$config['upload_path'] 		= './assets/upload/image/thumbs/'; //lokasi folder upload
	$config['allowed_types'] 	= 'gif|jpg|png|svg|tiff'; //format file yang diizinkan
	$config['max_size']			= '15000'; // KB ukuran maksimal	
	$this->load->library('upload', $config);
	if(! $this->upload->do_upload('gambar')) {

	 $data = array('title' 		=> 'Edit berita',
	 				'kategori' 	=> $kategori,
	 				'berita'	=> $berita,
	 				'error'		=> $this->upload->display_errors(),
	 				'isi'  		=> 'admin/berita/edit');
	 $this->load->view('admin/layout/wrapper',$data);

	 // Masuk database
		}else{
				$upload_data				= array('uploads' =>$this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/image/'.$upload_data['uploads']['file_name']; 
				$config['new_image'] 		= './assets/upload/image/thumbs/';
				$config['create_thumb'] 	= TRUE;
				$config['quality'] 			= "100%";
				$config['maintain_ratio'] 	= TRUE;
				$config['width'] 			= 360; // Pixel
				$config['height'] 			= 360; // Pixel
				$config['x_axis'] 			= 0;
				$config['y_axis'] 			= 0;
				$config['thumb_marker'] 	= '';
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				//hapus gambar lama
			if($berita->gambar != "") {
			unlink('./assets/upload/image/'.$berita->gambar);
			unlink('./assets/upload/image/thumbs'.$berita->gambar);
			}
				//end hapus gambar lama
				
			$i 			= $this->input;
			$data = array(	'id_berita'				=> $id_berita,
							'judul'					=> $i->post('judul'),
							'id_kategori_berita'	=> $i->post('id_kategori_berita'),
							'isi'					=> $i->post('isi'),
							'gambar'				=> $upload_data['uploads']['file_name'],
							'id_user'				=> $this->session->userdata('id'),
							'status_berita'			=> $i->post('status_berita'),
							'jenis_berita'			=> $i->post('jenis_berita')
							);

			$this->berita_model->edit($data);
			$this->session->set_flashdata('sukses','Berita telah diedit');
			redirect(base_url('admin/berita'));
			}}else{
			//edit tanpa ganti gambar
			$i 			= $this->input;
			$data = array(	'id_berita'				=> $id_berita,
							'judul'					=> $i->post('judul'),
							'id_kategori_berita'	=> $i->post('id_kategori_berita'),
							'isi'					=> $i->post('isi'),
							'id_user'				=> $this->session->userdata('id'),
							'status_berita'			=> $i->post('status_berita'),
							'jenis_berita'			=> $i->post('jenis_berita')
							);

			$this->berita_model->edit($data);
			$this->session->set_flashdata('sukses','Berita telah diedit');
			redirect(base_url('admin/berita'));
		}}
		// End masuk database
		
	 $data = array('title' => 'Edit berita',
	 				'kategori' => $kategori,
	 				'berita'	=> $berita,
	 				'isi'  => 'admin/berita/edit');
	 $this->load->view('admin/layout/wrapper',$data);
	} 


	//delete
	public function delete($id_berita) {
		$berita = $this->berita_model->detail($id_berita);
		//hapus gambar
		if($berita->gambar != "") {
			unlink('./assets/upload/image/'.$berita->gambar);
			unlink('./assets/upload/image/thumbs'.$berita->gambar);
		}
		//end hapus gambar
		$data = array( 'id_berita' => $id_berita );
		$this->berita_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data berita telah dihapus');
		redirect(base_url('admin/berita'));
	}

}