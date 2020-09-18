<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anuncio extends CI_Controller {

    public function registra()
	{
		$this->load->view('registra');
	}
	
	public function meus_anuncios(){
		$this->load->view('meus_anuncios');
	}
}
