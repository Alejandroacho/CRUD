<?php
include ('vendor/autoload.php');
use App\Model\CRUD;
require_once 'src\Model\CRUD.php';

$guestList = new CRUD();
$result = $guestList->readGuestData();

echo '
<table>
<tr>
    <th>Owner</th>
    <th>Dog</th>
    <th>Dog 2</th>
    <th>Dog 3</th>
    <th>Description</th>
    <th>Resgistration Date</th>
    <th colspan="2">Actions</th>
</tr>
';
foreach($result as $row){
    $udid=$row['ID:'];
    $uname=$row['Dueño:'];
    $uperro=$row['Perro:'];
    $uperro2=$row['Perro 2:'];
    $uperro3=$row['Perro 3:'];
    $udescripcion=$row['Descripción:'];
    echo'<tr>';
    echo'<td>';echo $row['Dueño:'];echo'</td>';
    echo'<td>';echo $row['Perro:'];echo'</td>';
    echo'<td>';echo $row['Perro 2:'];echo'</td>';
    echo'<td>';echo $row['Perro 3:'];echo'</td>';
    echo'<td>';echo $row['Descripción:'];echo'</td>';
    echo'<td>';echo $row['Fecha:'];echo'</td>';
    echo'<td> <a href="src\Controller\UpdateForm.php?ID='.$udid.'&Owner='.$uname.'&Perro='.$uperro.'&Perro2='.$uperro2.'&Perro3='.$uperro3.'&Descripcion='.$udescripcion.'"><img src="Media\updateicon.png"/></a></td>';
    echo'<td> <a href="src\Controller\AddGuest.php?ID='.$udid.'&Owner='.$uname.'&Perro='.$uperro.'&Perro2='.$uperro2.'&Perro3='.$uperro3.'&Descripcion='.$udescripcion.'"><img src="Media\plusicon.png"/></a></td>';
    echo'<td> <a href="src\Controller\DeleteData.php?ID='.$udid.'"><img src="Media\deleteicon.png"/></a></td>';
    echo'</tr>';
}
echo'</table>';
?>