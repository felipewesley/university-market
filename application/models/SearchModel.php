<?php

class SearchModel extends CI_Model {

    public function filter($filter_by, $content) {
        
        return true;
    }

    public function make_array_filters($filters) {
        
        $data = [];

        $flag = $filters['flag'] ?? null;
        $content = $filters['q'] ?? null;
        $filter = $filters['f'] ?? null;
        
        $data['search'] = $filter;

        if (is_null($flag) || is_null($content) || is_null($filter)) {
            
            $data['search'] = null;
            return $data;
        }

        $data['content'] = empty($filter)||is_null($filter) ? "todos os registros" : $filters['search_content'];
        
        $filters_decrypted = base64_decode($filter);
        $arr_filters = explode("&", $filters_decrypted);
        
        try {

            foreach ($arr_filters as $filter) {
                
                $v = explode("=", $filter);
                $label = "";

                $value = $v[1];

                if ($value == "%") {

                    switch (strtoupper($v[0])) {
                        case "VALOR":
                            $label = "Todos os valores";
                        break;
                        case "CIDADE":
                            $label = "Todas as cidades";
                        break;
                        case "CURSO":
                            $label = "Todos os cursos";
                        break;
                    }
                } else {

                    switch (strtoupper($v[0])) {
                        case "VALOR":
                            $label = "Até R$ $v[1].00";
                        break;
                        case "CIDADE":
                            $label = "Cidade: $v[1]";
                        break;
                        case "CURSO":
                            $label = "Cod.Curso: $v[1]";
                        break;
                    }
                }

                $data['filters'][] = array("label" => $label, "value" => $value);
            }

            return $data;

        } catch (Exception $e) {
            
            return array('search' => false);
        }
    }
}