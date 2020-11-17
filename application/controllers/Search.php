<?php

class Search extends CI_Controller {

    public function results($filter_by = false) {

        $this->load->model('SearchModel', 'pesquisa');

        $data = $this->pesquisa->make_array_filters($_GET);

        $this->load->university_market_page('search_page', $data);
    }

}