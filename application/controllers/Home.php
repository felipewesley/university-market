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

		$view = [];
		$view[] = ['homepage' => $data];

		// Função que cria a página default da aplicação com cabeçalho e rodapé, 
		// preenchendo o conteúdo com $view no padrão: 
		// array(['view_1' => '$dados1'],['view_2' => $dados2])
		$this->create_university_market_page($view);
		
		// JavaScript adicional para o carousel inicial
		$this->load->view('include_js_carousel');
	}

	public function cursos($curso = false) {

		// Carrega a biblioteca de controle padrão UniversityMarket com algumas funções
		$this->load->library('UniversityMarket', null, "control");

		// Dados do arquivo JSON contendo os menus da página
		// Deve ser passado sempre para o header e para o footer da página
		$menu['menu_data'] = $this->control::get_menu_config();

		$data['curso_especifico'] = $curso;

		// Cabeçalho padrão
		$this->load->view('header_default', $menu);
		// Corpo da página
		$this->load->view('courses_list', $data);
		// Rodapé padrão
		$this->load->view('footer_default', $menu);
	}
}
