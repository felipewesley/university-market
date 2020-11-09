<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('bancoteste.php');

class Login extends CI_Controller{

	
	public function fazerLogin() {

		$this->load->view('login');
	}
	public function fazerCad() {

		$this->load->view('cadastro');
	}
	public function conf_login() {
		//$this->load->library('session');
		$this->load->model('usuario_model');
		$username = $_POST['nome_login'];
		$user = $this->usuario_model->logarUsuarios($username);


		//var_dump($user);
		if ($user == TRUE) {
			$this->load->view('welcome_message');
		}else{
			//$this->session->set_flashdata('danger', 'Senha invalida!');
			$this->load->view('login');		
		}
			
	}
	public function save_cad(){
		$se.setsenha($this->input->post('senha_cad'));
		$this->load->view('login');	
	}


}
?>