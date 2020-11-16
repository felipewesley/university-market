<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index() {

		$this->load->model("HomepageModel","homepage");
		
		$data['cursos'] = $this->homepage->getCursos();

		// Função que cria a página default da aplicação com cabeçalho e rodapé, 
		// preenchendo o conteúdo com $view, contendo $data
		$this->load->university_market_page('homepage', $data);
		
		// JavaScript adicional para o carousel inicial
		// Incluido depois porque depende do carregamento da lib jQuery (bootstrap)
		$this->load->view('include_js_carousel');
	}

	public function cursos($curso = false) {

		$data['curso_especifico'] = $curso;
		
		$this->load->university_market_page('courses_list', $data);
	}
}
