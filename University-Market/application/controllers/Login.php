<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('cadastra_user');
		$this->load->view('footer');
	}
	public function logado()
	{
		if($_POST['email'] == 'jvkm2001@gmail.com' && $_POST['senha'] == '123'){
			echo "logado";
		}else{
			echo "Login Invalido!!!";
		}
	}

	public function sair()
	{
		echo "Saiu!";
	}

	public function cadastra_user(){
		if($_POST['user'] <> null && $_POST['senha'] <> null && $_POST['confirma_senha'] <> null && $_POST['senha'] == $_POST['confirma_senha'] && $_POST['email'] <> null){
			echo 'Usuário cadastrado';
		}else{
			echo "User invalido Invalido!!!";
		}
	}
}
