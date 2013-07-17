<?php
class menu {
    
    /* Get the Food and price values from the menu sql database */
    public function printMenuBubbles() {
        $mysqli = new mysqli('localhost', DATABASEUSER, DATABASEPASS, DATABASENAME);
        if (mysqli_connect_errno()) {
            echo 'database connection issues';
        }
        $query = "SELECT * FROM menu";
        if ($stmt = $mysqli->prepare($query)) {
            $stmt->execute();
            $stmt->bind_result($id, $food, $price);
            while ($stmt->fetch()) {

            include 'display/menu_bubbles.php';
          
            }
            $stmt->close();
        }$mysqli->close();
    }
    
}
?>