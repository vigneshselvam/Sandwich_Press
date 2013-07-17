<?php

require 'config.php';
require 'classes/menu.php';




$mode = $_GET['mode'];

switch ($mode) {
    case 'menu':
        menu();
        break;
    case 'page':
        page($_GET['id']);
    default:
        home();
        break;
}


function home () {
    include_once 'display/header.php';
    
    echo 'welcome to ugly sandwich press!  <a href="index.php?mode=menu">Click here for menu!</a>';
    
    include_once 'display/footer.php';
}


function menu () {
    
    include_once 'display/header.php';
    
    $menu = new menu();
    $menu->printMenuBubbles();
    
    include_once 'display/footer.php';
}


function page ($in_page) {
    include_once 'display/header.php';
    
    
    include 'display/' . $in_page . '.php';
    
    include_once 'display/footer.php';
}

?>