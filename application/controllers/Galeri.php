<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	//load data base
	public function __construct(){
		parent::__construct();
		$this->load->model('galeri_model'); //data galeri model
	}

	//index
	public function index(){
		
		$site   = $this->konfigurasi_model->listing();
		$galeri = $this->galeri_model->galeri();

		$data = array(  'title' 		=>	'Galeri - '.$site->namaweb.' | '.$site->tagline,
						'galeri'		=>   $galeri,
						'modal'			=>	 $galeri,
						'isi'			=> 	'galeri/list');
		$this->load->view('layout/wrapper', $data);
	}

}