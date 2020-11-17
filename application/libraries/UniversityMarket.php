<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UniversityMarket {
    
    public static function get_menu_config() {
        
        $file_path = "./application/utils/menu-list.json";
        
        $menuList = json_decode(file_get_contents($file_path));

        $arr = [];

        foreach ($menuList->menuList as $menu) {
            
            $arr[] = (array) $menu;
        }
        
        return $arr;
    }
}