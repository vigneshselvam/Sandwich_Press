<HTML>
<HEAD>
    <TITLE>Control Panel</TITLE>
    <meta name="robots" content="noindex">
</HEAD>
<BODY>
<?php
require '../classes/admin.php';

$mode = $_GET['mode'];
switch ($mode) {
/*
    case '':
        break;
    
    case '':
        break;
        */
    default:
        drawHome();
        break;
}



function drawHome () {
    echo <<< EOD
    hello, this is home.
    <form action="index.php?mode=">
        <label for="item">new item</label>
        <input type="text" name="item" />
        <input type="submit" />
    </form>
EOD;
}
?>
</BODY>
</HTML>