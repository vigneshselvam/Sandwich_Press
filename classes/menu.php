<?php
class menu {
    
    public $item;             // array
    public $price;            // array
    public $category;         // array
    
    public $total_items = 0;  // total menu items
    public $total_cats = 0;   // total number for categories of items
    public $name_cats;        // array
    
    function __construct() {
        $mysqli = new mysqli('localhost', DATABASEUSER, DATABASEPASS, DATABASENAME);
        if (mysqli_connect_errno()) {
            echo 'database connection issues';  // someday some better error handling
        }
        $query = "SELECT * FROM menu";
        if ($stmt = $mysqli->prepare($query)) {
            $stmt->execute();
            $stmt->bind_result($id, $food, $price, $category);
            while ($stmt->fetch()) {
                $this->item[$id] = $food;
                $this->price[$id] = $price;
                $this->category[$id] = $category;
                $this->total_items++;
            }
            $stmt->close();
        }
        
        $query = "SELECT * FROM categories";
        if ($stmt = $mysqli->prepare($query)) {
            $stmt->execute();
            $stmt->bind_result($id, $categories);
            while ($stmt->fetch()) {
                $this->name_cats[$id] = $categories;
                $this->total_cats++;
            }
            $stmt->close();
        }$mysqli->close();
    }
    
    public function drawBubbles ($outter_cat) {
         for ($inner=1;$inner <= $this->total_items;$inner++) {
            if ($this->category[$inner] == $outter_cat) {
                include 'display/menu_bubbles.php';
            }
        }
    }
    
}
?>