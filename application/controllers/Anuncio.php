<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anuncio extends CI_Controller {

    public function registra_anuncio()
	{
		$this->load->view('header');
		$this->load->view('registra_anuncio');
		$this->load->view('footer');
	}
	
	public function meus_anuncios()
	{
		$this->load->view('header');
		$this->load->view('meus_anuncios');
		$this->load->view('footer');
	}
}
