<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('bancoteste.php');

class Login extends CI_Controller{


	public function fazerLogin() {

		$this->load->university_market_page('login');
	}
	public function fazerCad() {

		$this->load->university_market_page('cadastro');
	}
	public function Perfil() {

		$user = $this->session->userdata('username');

		if (empty($user)) {
			$this->fazerLogin();
		}else{
			$data= $this->usuario_model->pegarlogado($user);		
			//var_dump($data);
			$this->load->university_market_page('perfil',$data);	
		}
		
	}

	public function conf_login() {
		//$this->load->library('session');
		$this->load->model('usuario_model');
		$username = $_POST['nome_login'];
		$senha = $_POST['senha_login'];
		$user = $this->usuario_model->autenticar($username,$senha);


		//var_dump($user);
		if ($user == TRUE){
			$this->session->set_userdata('username', $username);

			//echo $this->session->userdata('username');
			$this->Perfil();
		}else{
			//$this->session->set_flashdata('danger', 'Senha invalida!');
			$this->session->set_flashdata('danger', 'Usuario,senha ou email invalidos !');
			$this->load->university_market_page('login');		
		}
			
	}
	
	public function save_cad(){
		
		$this->load->model('usuario_model');

		$nha = $this->input->post('senha_cad');
		$ail = $this->input->post('email_cad');
	 	$luar = $this->input->post('cel_cad');
	 	$mento = $this->input->post('nasc_cad');

	 	$this->session->set_userdata('senhau',$mento);
	 	$this->session->set_userdata('emailu',$mento);
	 	$this->session->set_userdata('celu',$mento);
		$this->session->set_userdata('nascimento',$mento);

		$dados = array(
        'nome' => $this->input->post('nome_cad'),
        'senha' => $this->input->post('senha_cad'),
        'email' => $this->input->post('email_cad'),
        'telefone' => $this->input->post('cel_cad'),
        'nascimento' => $this->input->post('nasc_cad'),
    	);   
    	$this->usuario_model->insere($dados);
		$this->load->university_market_page('login');	
	}

	public function update_cad(){
		
		$this->load->model('usuario_model');

		$dados = array(
        'nome' => $this->input->post('nome_atualizar'),
        'senha' => $this->input->post('senha_atualizar'),
        'email' => $this->input->post('email_atualizar'),
        'telefone' => $this->input->post('telefone_atualizar'),
        'nascimento' => $this->session->userdata('nascimento'),
    	);
    	//var_dump($dados);   
    	$result = $this->usuario_model->altera($dados);
    	//var_dump($result);
    	
    	if ($result === true) {
    		$this->load->university_market_page('login');
    	}else{
    		echo "Update com erro ";
			//$this->load->university_market_page('perfil');
		}
	}


}
?>