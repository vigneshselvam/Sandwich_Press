<?php
require '../config.php';

class admin {
    public function addCategory ($input) {
        $mysqli = new mysqli('localhost', DATABASEUSER, DATABASEPASS, DATABASENAME);
        if (mysqli_connect_errno()) {
            echo 'database connection issues';  // someday some better error handling
        }
        $query = "INSERT************";
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
        }$mysqli->close();
    }
    
    public function addItem () {
        $mysqli = new mysqli('localhost', DATABASEUSER, DATABASEPASS, DATABASENAME);
        if (mysqli_connect_errno()) {
            echo 'database connection issues';  // someday some better error handling
        }
        $query = "INSERT************";
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
        }$mysqli->close();
    }
    
}

function getInfo () {
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

?>