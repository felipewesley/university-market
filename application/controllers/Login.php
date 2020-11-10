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
		$senha = $_POST['senha_login'];
		$user = $this->usuario_model->autenticar($username,$senha);


		//var_dump($user);
		if ($user == TRUE) {
			$this->load->view('welcome_message');
		}else{
			//$this->session->set_flashdata('danger', 'Senha invalida!');
			$this->load->view('login');		
		}
			
	}
	
	public function save_cad(){
		
		$this->load->model('usuario_model');

		$dados = array(
        'nome' => $this->input->post('nome_cad'),
        'senha' => $this->input->post('senha_cad'),
        'email' => $this->input->post('email_cad'),
        'telefone' => $this->input->post('cel_cad'),
        'nascimento' => $this->input->post('nasc_cad'),
    	);   
    	$this->usuario_model->insere($dados);
		$this->load->view('login');	
	}


}
?>