<?php

class User extends CI_Controller {

    public function index() {
        
        return true;
    }

    public function newPost() {
        
        $this->load->university_market_page('new_post');
    }
}