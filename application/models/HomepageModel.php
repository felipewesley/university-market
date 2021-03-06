<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Felipe Wesley
 */
class HomepageModel extends CI_Model {

    public function getCursos() {

        $file_path = "./application/utils/courses-list.json";
        
        $cursos = json_decode(file_get_contents($file_path));

        $arr = [];

        foreach ($cursos->courses as $curso) {

            $bg_file_path = "/content/images/layout/cursos_background/";
            if (property_exists($curso, "bg_path")) {
                $curso->bg_path = $bg_file_path . $curso->bg_path;
            }
            
            $arr[] = (array) $curso;
        }
        
        return $arr;
    }

    public function getCarouselProducts($quant) {

        $this->db->from('tb_product');
        $this->db->limit($quant);
        $this->db->order_by('product_initial_date', 'DESC');
        $result = $this->db->get();

        // print_r($result->result());
        
        return $result->result();
    }

}