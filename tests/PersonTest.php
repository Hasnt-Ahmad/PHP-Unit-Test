<?php  
use PHPUNit\framework\TestCase;
//require __DIR__. "/../../project/Person.php";

class PersonTest extends TestCase{

    protected $person;

    public function setUP():void{
        $this->person=new \project\Person;
    }

    public function testGetPersonName():void{
        $this->person->setName('Roger');
        $this->assertEquals($this->person->getName(),'Roger');
    }
    public function testGetPersonAge():void{
        $this->person->setAge(23);
        $this->assertEquals($this->person->getAge(),23);
    }
    public function testGetPersonNameAndAge():void{
        $this->person->setNameAndAge('Roger',23);
        $this->assertEquals($this->person->getNameAndAge(),['Roger',23]);
        $this->assertArrayHasKey(1,$this->person->getNameAndAge());
        
    }
}

?>