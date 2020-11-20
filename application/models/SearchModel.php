<?php

class SearchModel extends CI_Model {

    public function filter($filter_by, $content) {
        
        return true;
    }

    public function make_array_filters($filters) {
        
        $data = [];

        $flag = $filters['flag'] ?? null;
        $content = $filters['q'] ?? null;
        $filter = $filters['f'] ?? false;
        $data['search'] = $filter;

        if (is_null($flag) || $flag === false || $flag === "false") {
            
            $data['search'] = false;
            return $data;
        }

        $data['content'] = empty($content)||is_null($content) ? "todos os registros" : $content;

        if (empty($filter)||is_null($filter)) {

            $data['filters'][] = array("label" => "Todos os registros", "value" => "%");
            return $data;
        }
        
        $filters_decrypted = base64_decode($filter);
        $arr_filters = explode("&", $filters_decrypted);
        
        try {

            foreach ($arr_filters as $filter) {
                
                $v = explode("=", $filter);

                if ($v === false || count($v) <= 1) {
                    throw new Exception("Parâmetros inválidos..", 1);
                }
                $label = "";

                $value = $v[1];

                if ($value == "%") {

                    switch (strtoupper($v[0])) {
                        case "VALOR":
                            $key = "valor";
                            $label = "Todos os valores";
                        break;
                        case "CIDADE":
                            $key = "cidade";
                            $label = "Todas as cidades";
                        break;
                        case "CURSO":
                            $key = "curso";
                            $label = "Todos os cursos";
                        break;
                    }
                } else {

                    switch (strtoupper($v[0])) {
                        case "VALOR":
                            $key = "valor";
                            $label = "Até R$ $v[1].00";
                        break;
                        case "CIDADE":
                            $key = "cidade";
                            $label = "Cidade: $v[1]";
                        break;
                        case "CURSO":
                            $key = "curso";
                            $label = "Cod.Curso: $v[1]";
                        break;
                    }
                }

                $data['filters'][] = array("label" => $label, "key" => $key, "value" => $value);
            }

            return $data;

        } catch (Exception $e) {
            
            if ($e->getCode() === 1) {
                
                return array('search' => null);
            }
            return array('search' => false);
        }
    }

    public function get_products_with_filter($filters) {

        if (isset($filters['search']) && $filters['search'] == false) {
            return false;
        }
        if (!is_array($filters) || (is_array($filters) && count($filters) === 0)) {
            return false;
        }
        $f = [];

        foreach ($filters['filters'] as $filtro) {
            $f[$filtro["key"]] = $filtro["value"];
        }
        
        $f["content"] = $filters["content"];

        $tables = [];
        $tables[] = "tb_product";

        foreach ($f as $key => $value) {

            switch (strtoupper($key)) {

                case "VALOR":
                    if ($value == 0) break;
                    $this->db->where("product_value <", number_format(intval($value), 2));
                break;
                case "CURSO":
                    $this->db->where("product_course_id", $value);
                    $this->db->join("tb_courses cursos", "cursos.course_id = tb_product.product_course_id");
                break;
                case "CONTENT":
                    $str_like = "(product_name LIKE '%$value%' OR ";
                    $str_like.= "product_description LIKE '%$value%' OR ";
                    $str_like.= "product_hashtags LIKE '%$value%')";
                    $this->db->where($str_like);
                break;
            }
        }
        $this->db->from(implode(",", $tables));
        $result = $this->db->get();

        // echo "<pre>";
        // print_r($result->result());
        // echo "</pre>";

        return $result->result();
    }
}