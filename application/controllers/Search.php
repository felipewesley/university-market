<?php

class Search extends CI_Controller {

    public function results($filter_by = false, $content = false) {
        
        $view_name = "search_page";
        $data = [];

        $data['filter_by'] = $filter_by;
        $data['content'] = $content;
        
        $view = [];
        $view[] = [$view_name => $data];

        $this->create_university_market_page($view);
    }

}