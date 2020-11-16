<?php

class Product extends CI_Controller {

    public function getProduct($id = false) {

        // $this->load->model("ProductModel", "product");

        $data = [];

        if ($id) {
            
            $data['product_id'] = $id;
            $this->load->university_market_page('product_details', $data);
            return true;
        }

        $this->load->university_market_page('top_products', $data);
    }
}