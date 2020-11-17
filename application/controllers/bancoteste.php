<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bancoteste extends CI_Controller {

	public $senha;

	public function getsenha(){
		return $this->senha;
	}
	public function setsenha($senhas){
		$this->senha = $senhas;
	}
	

}
?>