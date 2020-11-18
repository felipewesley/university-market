<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Felipe Wesley
 */
class ProductModel extends CI_Model {

    private $default_product_image = "default.png";

    public function index() {

        return true;
    }

    public function newProduct() {

        $data = $_POST;
    }

    private function product_last_id() {

        $table = "tb_last_id";

        $this->db->where(["table_name" => "tb_product"]);
        $this->db->limit(1);
        
        $result = $this->db->get($table);
        
        return $result->result()[0];
    }

    // public function get_n_products($n) {}

    public function getProduct($product_id = false) {

        $filter = [];

        if ($product_id) {

            $filter[] = ['product_id' => $product_id];
            
        }
        
        /*
        INSERT INTO `tb_product` (`product_id`, `product_name`, `product_description`, `product_hashtags`, `product_primary_value`, `product_primary_pay_method`, `product_primary_pay_condition`, `product_secondary_value`, `product_secondary_pay_method`, `product_secondary_condition`, `product_initial_date`, `product_last_edit_date`, `product_final_date`, `product_situation`, `product_image_path`, `product_delivery_type`, `product_aditional_info`, `product_user_id`, `product_course_id`, `product_notification_flag`, `product_status`, `product_deleted`) VALUES (NULL, 'Livro de Engenharia de Software (PRESSMAN)', 'Livro de Engenharia de Software de PRESSMAN e MAXIM, 8ª edição, do ano de 2015. O livro tem duas páginas rasgadas no início. É a versão traduzida e está em português de Portugal.', 'engenhariadesoftware;pressman;maxim;ti;informatica;ads;computacao;computador', '127.5', '1', '1', '133', '2', '2', '2020-11-16 23:16:21', '2020-11-16 23:16:21', '2020-12-31 23:59:59', '1', 'e12754e0b07f55944164e31849588573', '1', NULL, '2', '3', '1', '1', '0')
        */

        $this->db->from('tb_product, tb_product_situation, tb_delivery_type');
        $this->db->where(['product_id' => $product_id]);
        $this->db->join('tb_product_situation sit', 'sit.situation_id = tb_product.product_situation');
        $this->db->join('tb_delivery_type delivery', 'delivery.id = tb_product. product_delivery_type');
        $this->db->join('tb_payment_type paytype', 'paytype.payment_type_id = tb_product.product_pay_type');
        $this->db->limit(1);
        $result = $this->db->get();

        if (count($result->result()) === 0) {

            return ["search_status" => false];
        }

        $arr_result = [];
        $arr_result["search_status"] = true;

        foreach ((array) $result->result()[0] as $key => $value) {

            if ($key == "product_id") {
                $arr_result["original_id"] = $value;
                $arr_result[$key] = str_pad($value, 8, "0", STR_PAD_LEFT);
                continue;
            }
            if ($key == "product_image_path") {
                
                $extension = "jpg";
                $arr_result[$key] = $this->get_image_path($value, $extension);
                continue;
            }
            if (strpos($key, "value") !== false) {

                $arr_result[$key] = number_format($value, 2, ",", ".");
                continue;
            }
            if (strpos($key, "initial_date") !== false) {
                
                $arr_result[$key] = $value;
                $arr_result['date'] = $this->get_formated_date($value);
                continue;
            }
            if ($key == "delivery_desc") {
                
                if (strtolower($value) == "imediatamente") {
                    $arr_result[$key] = "Entrega imediata";
                    continue;
                }
            }
            if ($key == "product_pay_condition") {
                if (!(is_null($value) || empty($value))) {
                    $arr_result[$key] = $value . "x de ";
                    continue;
                }
                $arr_result[$key] = "";
                continue;
            }
            $arr_result[$key] = $value;
        }

        return $arr_result;
    }

    private function get_image_path($file_name, $file_extension) {

        $path = "content/images/layout/products/";

        $file_path_main = $path . $file_name . "." .$file_extension;

        if (file_exists("$file_path_main")) {

            return "/$file_path_main";
        }
        return "/" . $path . $this->default_product_image;
    }

    private function get_formated_date($str_date) {

        // 2020-12-31 23:59:59
        $str_date = trim($str_date);

        $arr_datetime = explode(" ", $str_date);

        $date = explode("-", $arr_datetime[0]);
        $time = explode(":", $arr_datetime[1]);

        $final_date = [];
        
        $final_date['year'] = $date[0];
        $final_date['month'] = $date[1];
        $final_date['day'] = $date[2];

        $final_date['hour'] = $time[0];
        $final_date['minute'] = $date[1];
        $final_date['seconds'] = $date[2];

        return $final_date;
    }
}