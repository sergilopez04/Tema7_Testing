<?php
use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase{
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