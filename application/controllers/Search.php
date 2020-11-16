<?php

class Search extends CI_Controller {

    public function results($filter_by = false) {
        
        $view_name = "search_page";

        $this->load->model('SearchModel', 'pesquisa');

        $data = $this->pesquisa->make_array_filters($_GET);
        
        $view = [];
        $view[] = [$view_name => $data];

        $this->create_university_market_page($view);
    }

}