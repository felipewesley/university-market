<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
	public function logado()
	{
		if($_POST['user'] == 'market' && $_POST['senha'] == '123'){
			$user = $_POST['user'] == null ? $_POST['user'] : 'Login';
			$arr = [];
			$arr['welcome_message'] = $user;
			$this->load->view('welcome_message',$arr);
		}else{
			header('location:/Login/index');
		}
	}

	public function sair()
	{
		if($_POST['email'] == 'jvkm2001@gmail.com' && $_POST['senha'] == '123'){
			$this->load->view('welcome_message');
			// echo "logados";
		}else{
			header('location:/Login/index');
		}
	}
}
