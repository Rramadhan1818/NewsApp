<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	//load database
	//load data base
	public function __construct() {
		parent::__construct();
		$this->load->model('site_model'); //data model
		$this->load->model('user_model'); //data user
	}
	 public function index() {

	 $user = $this->user_model->listing();
	 $data = array('title' => 'Administrator',
	 				'user' => $user,
	 				'isi'  => 'admin/user/list');
	 $this->load->view('admin/layout/wrapper',$data);
	
	}

	//tambah
	 public function tambah() {

	 $site = $this->site_model->listing();

	 //validation
	 $valid = $this->form_validation;
	 $valid->set_rules('nama', 'Nama', 'required',
	 				   array('required' => 'Nama harus diisi' ));

	 $valid->set_rules('username', 'Username', 'required|is_unique[users.username]',
	 				   array('required'  => 'Username harus diisi',
	 				   		 'is_unique' => 'Oopss.. Username : <strong>'.$this->input->post('username').'</strong> sudah digunakan. Silahkan 			  buat username baru!'));

	 $valid->set_rules('email', 'Email', 'required|valid_email',
	 				   array('required' 	=> 'Email harus diisi',
	 				   		 'valid_email'  => 'Oopss E-mail tidak valid'));

	 $valid->set_rules('password', 'password', 'required|max_length[32]|min_length[6]',
	 				   array('required' 	=> 'Password harus diisi',
	 				   		 'min_length'	=> 'Password minimal 6 karakter',
	 				   		 'max_length'	=> 'Password maxsimal 32 karakter'));

	 if($valid->run() ===FALSE){
	 //end valid
	 $data = array('title' => 'Tambah Administrator',
	 				'site' => $site,
	 				'isi'  => 'admin/user/tambah');
	 $this->load->view('admin/layout/wrapper',$data);
	 //masuk database
	}else{
	 $i = $this->input;
	 $data = array(	'nama' 		=> $i->post('nama'),
	 				'email'	    => $i->post('email'),
	 				'username'  => $i->post('username'),
	 				'password'  => sha1($i->post('password')), //enskrip sha1
	 				'id_site'	=> $i->post('id_site'),
	 				'level'		=> $i->post('level')
	 			  );
	 $this->user_model->tambah($data);
	 $this->session->set_flashdata('sukses', 'User/Administrator telah ditambah');
	 redirect(base_url('admin/user'));
	 
	 }
	 //end masuk databse	
	}

	//edit
	 public function edit($id_user) {

	 $site = $this->site_model->listing();
	 $user = $this->user_model->detail($id_user);


	 //validation
	 $valid = $this->form_validation;
	 $valid->set_rules('nama', 'Nama', 'required',
	 				   array('required' => 'Nama harus diisi' ));

	 /*
	 $valid->set_rules('username', 'Username', 'required|is_unique[users.username]',
	 				   		 'is_unique' => 'Oopss.. Username : <strong>'.$this->input->post('username').'</strong> sudah digunakan. Silahka
	 				   array('required'  => 'Username harus diisi',n 			  buat username baru!'));
	 */

	 $valid->set_rules('email', 'Email', 'required|valid_email',
	 				   array('required' 	=> 'Email harus diisi',
	 				   		 'valid_email'  => 'Oopss E-mail tidak valid'));

	 $valid->set_rules('password', 'password', 'required|max_length[32]|min_length[6]',
	 				   array('required' 	=> 'Password harus diisi',
	 				   		 'min_length'	=> 'Password minimal 6 karakter',
	 				   		 'max_length'	=> 'Password maxsimal 32 karakter'));

	 if($valid->run() ===FALSE){
	 //end valid
	 $data = array('title' => 'Edit Administrator',
	 				'site' => $site,
	 				'user' => $user,
	 				'isi'  => 'admin/user/edit');
	 $this->load->view('admin/layout/wrapper',$data);
	 //masuk database
	}else{
	 $i = $this->input;
	 if (strlen ($i->post('password')) < 6 || strlen($i->post('password')) > 32) {

	 $data = array(	'id_user'	=> $id_user,	
	 				'nama' 		=> $i->post('nama'),
	 				'email'	    => $i->post('email'),
	 				'username'  => $i->post('username'),
	 				// 'password'  => sha1($i->post('password')), //enskrip sha1
	 				'id_site'	=> $i->post('id_site'),
	 				'level'		=> $i->post('level')
	 			  );
	 }else{

	 $data = array(	'id_user'	=> $id_user,	
	 				'nama' 		=> $i->post('nama'),
	 				'email'	    => $i->post('email'),
	 				'username'  => $i->post('username'),
	 				'password'  => sha1($i->post('password')), //enskrip sha1
	 				'id_site'	=> $i->post('id_site'),
	 				'level'		=> $i->post('level')
	 			  );
	 }
	 $this->user_model->edit($data);
	 $this->session->set_flashdata('sukses', 'User/Administrator telah diedit');
	 redirect(base_url('admin/user'));
	 
	 }
	 //end masuk databse
	}

	//delete
	public function delete($id_user){
		$data = array('id_user' => $id_user );
		$this->user_model->delete($data);
	 	$this->session->set_flashdata('sukses', 'User/Administrator telah dihapus');
		redirect(base_url('admin/user'));
	}
	
}
