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
        
            /*
            INSERT INTO `tb_product` (`product_id`, `product_name`, `product_description`, `product_hashtags`, `product_primary_value`, `product_primary_pay_method`, `product_primary_pay_condition`, `product_secondary_value`, `product_secondary_pay_method`, `product_secondary_condition`, `product_initial_date`, `product_last_edit_date`, `product_final_date`, `product_situation`, `product_image_path`, `product_delivery_type`, `product_aditional_info`, `product_user_id`, `product_course_id`, `product_notification_flag`, `product_status`, `product_deleted`) VALUES (NULL, 'Livro de Engenharia de Software (PRESSMAN)', 'Livro de Engenharia de Software de PRESSMAN e MAXIM, 8ª edição, do ano de 2015. O livro tem duas páginas rasgadas no início. É a versão traduzida e está em português de Portugal.', 'engenhariadesoftware;pressman;maxim;ti;informatica;ads;computacao;computador', '127.5', '1', '1', '133', '2', '2', '2020-11-16 23:16:21', '2020-11-16 23:16:21', '2020-12-31 23:59:59', '1', 'e12754e0b07f55944164e31849588573', '1', NULL, '2', '3', '1', '1', '0')
            */

        // $this->db->select('id_usuario, nome, nascimento');
        // $this->db->where(['id_usuario' => 2]);
        $result = $this->db->get('tb_product');

        return $result->result();
    }
}