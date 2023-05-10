<?php  


use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase{

    public function testTrueReturnstrue(){
        $output=false;
        if(1===1){
            $output=true;
        }
        $this->assertTrue($output);

    }
    public function checkIfHaskey(): void{
        $userArray=[
            'name'=>'Rpger',
            'age'=> 23
        ];

        $this->assertArrayHasKey('age', $userArray);
    }
   
}




?>