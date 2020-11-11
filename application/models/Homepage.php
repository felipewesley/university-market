<?php
/**
 * este arquivo é responsavel por conversar com o banco de dados
 */
class Homepage extends CI_Model {

    public function getCursos() {

        $file_path = "./content/json/index/courses-list.json";
        $cursos = json_decode(file_get_contents($file_path));

        return $cursos->courses;
    }

}