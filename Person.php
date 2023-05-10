<?php
namespace project;
class Person{

    protected $person;
    protected $personAge;


    public function setName($name){
        $this->person=$name;
    }
    public function getName(){
        return $this->person;
    }
    public function setAge($age){
        $this->personAge=$age;
    }
    public function getAge(){
        $this->personAge;
    }
    public function setNameAndAge($name,$age){
        $this->person=$name;
        $this->personAge=$age;
    }
    public function getNameAndAge(){
        return [$this->person,$this->personAge];
    }
}