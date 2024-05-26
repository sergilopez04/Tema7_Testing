<?php
require_once 'src/Ex1.php';
use PHPUnit\Framework\TestCase;

class Ex1Test extends TestCase{
    public function testIsEven(){
        $numberChecker = new NumberChecker(8);
        $this->assertTrue($numberChecker->isEven());

        $numberChecker = new NumberChecker(3);
        $this->assertFalse($numberChecker->isEven());
    }

    public function testIsPositive(){
        $numberChecker = new NumberChecker(1);
        $this->assertTrue($numberChecker->isPositive());

        $numberChecker = new NumberChecker(-1);
        $this->assertFalse($numberChecker->isPositive());
    }
}




?>