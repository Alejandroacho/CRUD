<?php
namespace App\Model;
final class Connection{
        public function Connect(){
                $connection= mysqli_connect("localhost", "root", "", "hotel_canino"); 
                return $connection;
        }
}
?>