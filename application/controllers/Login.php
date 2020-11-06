<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('bancoteste.php');

class Login extends CI_Controller {

	public $senha;
	$s = new bancoteste();

	public function fazerLogin() {

		$this->load->view('login');
	}
	public function fazerCad() {

		$this->load->view('cadastro');
	}
	public function conf_login() {

		$confirmacao = $this->input->post('senha_login');
		//echo "senha " . $this->senha;
		//echo "confirmacao " . $confirmacao;
		if ($s->getsenha() == $confirmacao) {
			$this->load->view('welcome_message');
		}else{
			
			$this->load->view('login');
		
		}	
	}
	public function save_cad(){
		$s->setsenha($this->input->post('senha_cad'));
		$this->load->view('login');	
	}


}
?>