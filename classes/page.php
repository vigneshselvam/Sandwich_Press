<?php


class page {

    public static function drawPage ($content) {
        switch ($content) {
        
            case 'menu':
                page::drawMenu();
                break;
            
            default:
                page::staticPage($content);
                break;
        }
    }
    
    protected static function drawHeader() {
        require 'display/header.php';
    }
    
    protected static function drawFooter() {
        require 'display/footer.php';
    }
    
    protected static function staticPage($in_page) {
        page::drawHeader();  
        include 'display/' . $in_page . '.php';
        page::drawFooter();  
    }
    
    protected static function drawMenu() {
        page::drawHeader();  // draws the display/header.php
        // grabs the menu items out of the database and assigns them to the menu object
        $menu = new menu();
        for ($outter = 1; $outter <= $menu->total_cats; $outter++) {    
            include 'display/menu_bubble_category.php';
        
        }
        page::drawFooter(); 
    }
}

?>