<?php

class Search extends CI_Controller {

    public function results($filter_by = false) {

        $this->load->model('SearchModel', 'pesquisa');

        $data = [];

        $filters = $this->pesquisa->make_array_filters($_GET);
        $data['filters'] = $filters;
        $data['results'] = $this->pesquisa->get_products_with_filter($filters);

        $this->load->university_market_page('search_page', $data);
    }

}