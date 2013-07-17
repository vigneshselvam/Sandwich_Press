<?php 
/* HTML for the menu items goes here */
echo <<< EOT


    <table border="1">
        <thead>
            <tr>
                <th>item</th><th>price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{$food}</td><td>{$price}</td>
            </tr>
        </tbody>
    </table>

    
EOT;
?>