<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index(){
 
 $valid = $this->form_validation;
 $valid->set_rules('username', 'username', 'required',
				   array('required' => 'username harus diisi' ));
 $valid->set_rules('password', 'password', 'required',
				   array('required' => 'password harus diisi' ));

 $username = $this->input->post('username');
 $password = $this->input->post('password');
 
 if($valid->run()){
 	$this->simple_login->login($username, $password,
 	 base_url('admin/dahbor'), base_url('login'));
 }

 	$data = array('title' => 'Login Pengguna');
 	$this->load->view('login_view', $data);
 }
 public function logout(){
 	$this->simple_login->logout();
 }

}