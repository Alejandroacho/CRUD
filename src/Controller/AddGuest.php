<?php

$id=$_GET['ID'];
$nombre=$_GET['Owner'];
$uperro=$_GET['Perro'];
$uperro2=$_GET['Perro2'];
$uperro3=$_GET['Perro3'];
$udescripcion=$_GET['Descripcion'];

echo     
"
<html>
<head>
    <meta charset='UTF-8'>
    <title>Dog Hotel | Registration Complete</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' type='text/css' href='http://localhost/Proyectos\FactoriaF5\CRUD\StyleExtra.css'>
</head>

<body>
    <br>
    <h1>Add Your Other Dogs With This Form</h1>
    <hr>
    <br>
    <p>Thank You For Choosing Us For The Care Of Your Dog!</p>
    <br>
    <div class='formulario'>
        <form method='POST' action='UpdateData.php'>
        <label for='ownername'>ID:</label>
        <br>
        <input type=text value='$id' id='id' name='id' readonly>
        <br><br>
        <label for='ownername'>Owner's name:</label>
        <br>
        <input type='text' id='ownername' name='ownername' value='$nombre' readonly>
        <br><br>
        <label for='dogname'>Dog's name:</label>
        <br> 
        <input type='text' id='dogname' name='dogname' value='$uperro' readonly>
        <br><br>
        <label for='dogname'>Second dog's name:</label>
        <br> 
        <input type='text' id='dogname' name='dogname2' placeholder='Firulais 2' value='$uperro2'>
        <br><br>
        <label for='dogname'>Third dog's name:</label>
        <br> 
        <input type='text' id='dogname' name='dogname3' placeholder='Firulais 3'>
        <br><br>
        <label for='others'>Dog's description:</label>
        <br>
        <input type='text' id='others' name='others' value='$udescripcion'>
        <br><br>
        <input type='submit'>
        </form>
    </div>
    <br>
    <hr>
    <br>
    <div class='boton'>
        <a href='http://localhost/Proyectos\FactoriaF5\CRUD\Index.php'>Return</a>
    </div>  
</body>
</html>

"
?>