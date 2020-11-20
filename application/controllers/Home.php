<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * @method index() Index Page for this controller.
	 * @return void
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 */
	public function index() {

		define("MAX_CAROUSEL_PRODUCTS", 6);
		
		$this->load->model("HomepageModel","homepage");
		
		$data['cursos'] = $this->homepage->getCursos();
		$data['carousel'] = $this->homepage->getCarouselProducts(MAX_CAROUSEL_PRODUCTS);

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
