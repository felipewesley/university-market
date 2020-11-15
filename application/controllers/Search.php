<?php

class Search extends CI_Controller {

    public function results($filter_by = false) {
        
        $view_name = "search_page";
        // $data = [];

        $data = $_GET;

        $this->load->model('SearchModel', 'pesquisa');

        $data['filter_by'] = $filter_by;
        
        $view = [];
        $view[] = [$view_name => $data];

        $this->create_university_market_page($view);
    }

}