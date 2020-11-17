<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Felipe Wesley
 */
class ProductModel extends CI_Model {

    public function index() {

        return true;
    }

    public function newProduct() {

        $data = $_POST;
    }

    public function getProduct($product_id = false) {

        $filter = [];

        if ($product_id) {

            $filter[] = ['product_id' => $product_id];
            
        }
        
            //  Product database table

            // "product_id",
            // "product_name",
            // "product_description",
            // "product_hashtags",
            // "product_primary_value",
            // "product_primary_payment_method",
            // "product_primary_payment_condition",
            // "product_secondary_value",
            // "product_secondary_payment_method",
            // "product_secondary_payment_condition",
            // "product_initial_date",
            // "product_last_update_date",
            // "product_final_date",
            // "product_situation",
            // "product_image_path",
            // "product_delivery_type",
            // "product_aditional_info",
            // "product_user_id",
            // "product_course_id",
            // "product_notification_flag",
            // "product_deleted"
        

        $this->db->select('id_usuario, nome, nascimento');
        $this->db->where(['id_usuario' => 2]);
        $result = $this->db->get('usuario');

        return $result->result();
    }
}