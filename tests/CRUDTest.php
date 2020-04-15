<?php
use PHPUnit\Framework\TestCase;
use App\Model\CRUD;

final class CRUDTest extends TestCase { 

    public function testCreateGuest(){
        $dueño="Sebastian";
        $perro="Xela";
        $descripcion="Otros";
        $perro2=null;
        $perro3=null;

        $creator = new CRUD();
        $result = $creator->createGuest($dueño,$perro,$perro2,$perro3,$descripcion);

        $this->assertEquals(true, $result);
    }
   
    public function testReadGuestData (){

        $reader = new CRUD();
        $result = $reader->readGuestData();

        $this->assertIsArray($result);
    }

    public function testUpdateData (){
        $id="106";
        $dueño="Alejandro";
        $perro="Firulais";
        $perro2=null;
        $perro3=null;
        $descripcion="Raza chihuahua, tamaño pequeño";

        $updater = new CRUD();
        $result = $updater->updateGuestData($id,$dueño,$perro,$perro2,$perro3,$descripcion);

        $this->assertEquals(true, $result);
    }

    public function testDeleteData (){
        $id="109";

        $deleter = new CRUD();
        $result = $deleter->deleteGuestData($id);

        $this->assertEquals(true, $result);
    }

}
?>