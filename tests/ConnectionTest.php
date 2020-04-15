<?php
use PHPUnit\Framework\TestCase;
use App\Connection;

final class ConnectionTest extends TestCase { 
    public function testConnection(){
        $localhost="localhost";
        $root="root";
        $password="";
        $tabla="hotel_canino";
        
        $connection=mysqli_connect("$localhost", "$root", "$password", "$tabla");
        $expected=$connection;

        $creator = new Connection();
        $result = $creator->Connect();

        $this->assertEquals($expected, $result);
    }
}
?>