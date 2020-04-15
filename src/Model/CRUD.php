<?php
namespace App\Model;
use App\Model\Connection;

final class CRUD {  

    public function createGuest($dueño, $perro, $perro2, $perro3, $descripcion){

        $connection= new Connection();
        $connect= $connection->connect();
        
        if ($dueño!=null || $perro!=null || isset($perro2)|| isset($perro3) || $descripcion!=null){
            $sqlAdd="insert into huespedes(Dueño,Perro,Perro2,Perro3,Descripción)values('".$dueño."','".$perro."','".$perro2."','".$perro3."','".$descripcion."')";
            $add=mysqli_query($connect, $sqlAdd);
            return $add;

            if(isset ($add)){
                return true;
            }
        }
    }  
    public function readGuestData(){
        
        $connection= new Connection();
        $connect= $connection->connect();

        $queryAll = "SELECT * FROM huespedes";
        $resultAll = mysqli_query($connect, $queryAll);
        $arrayHuespedes = array();
        while ($row = mysqli_fetch_array($resultAll))
        {
            $arrayHuespedes[] = array 
            (
                "ID:" => $row['ID'],
                "Dueño:" =>$row['Dueño'],
                "Perro:" =>$row['Perro'],
                "Perro 2:"=>$row['Perro2'],
                "Perro 3:"=>$row['Perro3'],
                "Descripción:" =>$row['Descripción'],
                "Fecha:" =>$row['Fecha de entrada']
            );
        }
        return $arrayHuespedes;
    }

    public function updateGuestData($id, $dueño, $perro, $perro2, $perro3, $descripcion){
        
        $connection= new Connection();
        $connect= $connection->connect();
        
        $queryupdate="UPDATE huespedes SET Dueño='$dueño', Perro='$perro',Perro2='$perro2',Perro3='$perro3', Descripción='$descripcion' WHERE ID='$id'";
        $update = mysqli_query($connect, $queryupdate);        
        return $update;

        if(isset ($update)){
            return true;
        }
    }

    public function deleteGuestData($id){
        
        $connection= new Connection();
        $connect= $connection->connect();

        $querydelete="DELETE FROM huespedes WHERE ID='$id'";
        $delete = mysqli_query($connect, $querydelete);        
        return $delete;

        if(isset ($delete)){
            return true;
        }
    }
}
?>