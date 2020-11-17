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
            
            if ($e->getCode() === 1) {
                
                return array('search' => null);
            }
            return array('search' => false);
        }
    }
}