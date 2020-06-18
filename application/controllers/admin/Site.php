<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	//load data base
	public function __construct(){
		parent::__construct();
		$this->load->model('site_model'); //data site
	}

	//index
	 public function index(){
	 $site = $this->site_model->listing();
	 $data = array('title' => 'Data Site',
	 				'site' => $site,
	 				'isi'  => 'admin/site/list');
	 $this->load->view('admin/layout/wrapper',$data);
	}
	//tambah
	public function tambah(){
		$valid = $this->form_validation;
		$valid->set_rules('nama_site', 'Nama Site', 'required',
						  array('required' => 'Nama site harus diisi' ));
		if($valid->run()===FALSE){

				$data = array('title' => 'tambah data',
	 							'isi'  => 'admin/site/tambah');
				 $this->load->view('admin/layout/wrapper',$data);
		}else{
			$i=$this->input;
			$data = array('nama_site' => $i->post('nama_site'),
						  'contact_person' => $i->post('contact_person'),
						  'alamat' => $i->post('alamat'),
						  'telepon' => $i->post('telepon'),
						  'hp' => $i->post('hp'),
						  'email' => $i->post('email'),
						  'kota' => $i->post('kota'),
						  'keterangan' => $i->post('keterangan')
							 );
			$this->site_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data berhasil di tambah');
			redirect(base_url('admin/site'));
		}
	}


	//EDIT
	public function edit($id_site){
		$site =$this->site_model->listing();
		$site =$this->site_model->detail($id_site);
	//validasi
		$valid = $this->form_validation;
		$valid->set_rules('nama_site','nama site','required',
		 					array('required' =>'nama harus diisi'));
		if($valid->run()===FALSE){
	//End validasi
	
	$data =	array(			'title' => 'Edit site', 
							'site' => $site,
							'isi'=>'admin/site/edit');
				$this->load->view('admin/layout/wrapper',$data);

			}else{

				$i= $this->input;
				$data=array('id_site'		    =>$id_site,
							'nama_site' 		=>$i->post('nama_site'),
							'contact_person'	=>$i->post('contact_person'),
							'alamat'			=>$i->post('alamat'),
							'telepon'			=>$i->post('telepon'),
							'hp'				=>$i->post('hp'),
							'email'				=>$i->post('email'),
							'kota'				=>$i->post('kota'),
							'keterangan' 		=>$i->post('keterangan'));
							$this->site_model->edit($data);
							$this->session->set_flashdata('sukses','data site telah update');
							redirect(base_url('admin/site'));
							//end masuk database
			}

		}
	

	//delete
	public function delete($id_site) {

		$data = array( 'id_site' => $id_site );
		$this->site_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data site telah dihapus');
		redirect(base_url('admin/site'));
	}
}







