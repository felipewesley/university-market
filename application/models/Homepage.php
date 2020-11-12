<?php
/**
 * este arquivo é responsavel por conversar com o banco de dados
 */
class Homepage extends CI_Model {

    public function getCursos() {

        $file_path = "./content/json/index/courses-list.json";
        $cursos = json_decode(file_get_contents($file_path));

        $c = [];

        foreach ($cursos->courses as $curso) {
            
            $arr = [];
            $arr['id'] = $curso->id;
            $arr['name'] = $curso->name;
            $arr['bg_path'] = "/content/images/index/cursos_background/$curso->bg_path";
            $arr['description'] = $curso->description;
            
            $c[] = $arr;
        }
        
        return $c;
    }

}