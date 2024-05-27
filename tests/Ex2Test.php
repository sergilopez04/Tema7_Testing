<?php
use PHPUnit\Framework\TestCase;

class CheckEx2 extends TestCase{

    public function testCheckGrade(){
    $this->expectOutputString("A estudiar, amore\n");
    CheckGrade(1);

    $this->expectOutputString("Hauries de ser de Tercera Divisió :))\n");
    CheckGrade(33);

    $this->expectOutputString("Hauries de ser de Segona Divisió :))\n");
    CheckGrade(45);

    $this->expectOutputString("Hauries de ser de Primera Divisió :)\n");
    CheckGrade(60);
    }
}  
?>