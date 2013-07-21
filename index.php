<?php

require 'config.php';
require 'classes/menu.php';
require 'classes/page.php';



/* Get information from the client */
$mode = $_GET['mode'];

switch ($mode) {
    case 'menu':
        page::drawPage('menu');
        break;
    case 'page':
        page::drawPage($_GET['id']);
    default:
        page::drawPage('home');
        break;
}



?>