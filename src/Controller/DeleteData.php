<?php
include ('C:\xampp\htdocs\Proyectos\FactoriaF5\CRUD\vendor\autoload.php');
use App\Model\CRUD;

$id=$_GET['ID'];

$deleter = new CRUD();
$result = $deleter->deleteGuestData($id);

echo'
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dog Hotel | Elimination Complete</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="http://localhost/Proyectos\FactoriaF5\CRUD\StyleExtra.css">
    </head>

    <body>
        <br>
        <h1>Elimination Complete</h1>
        <hr>
        <br>
        <p>Thank You For Choosing Us For The Care Of Your Dog!</p>
        <br>
        <div class="boton">
            <a href="http://localhost/Proyectos\FactoriaF5\CRUD\Index.php">Return</a>
        </div>
    </body>
</html>';

return $result;
?>