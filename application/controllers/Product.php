<?php

class Product extends CI_Controller {

    public function getProduct($id = false) {

        $this->load->model("ProductModel", "product");

        $data = [];

        $data['p'] = $this->product->getProduct($id);

        $this->load->university_market_page('product_details', $data);
    }
}