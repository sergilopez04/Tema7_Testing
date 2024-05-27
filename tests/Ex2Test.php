<?php

require_once 'src/Ex2.php';
use PHPUnit\Framework\TestCase;

class Ex2Test extends TestCase
{
    public function testCheckGrade1()
    {
        $this->expectOutputString("A estudiar, amore\n");
        CheckGrade(1);
    }

    public function testCheckGrade33()
    {
        $this->expectOutputString("Hauries de ser de Tercera Divisió :))\n");
        CheckGrade(33);
    }

    public function testCheckGrade45()
    {
        $this->expectOutputString("Hauries de ser de Segona Divisió :))\n");
        CheckGrade(45);
    }

    public function testCheckGrade60()
    {
        $this->expectOutputString("Hauries de ser de Primera Divisió :)\n");
        CheckGrade(60);
    }
}

?>
