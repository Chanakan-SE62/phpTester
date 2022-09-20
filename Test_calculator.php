<?php
include "Calculator.php";

use PHPUnit\Framework\TestCase;

class Test_calculator extends TestCase {
    private $calculate;

    public function setUp():void {
        $this->calculate = new Calculator();
    }
    public function testMultiply() {
        $this->assertEquals(4,$this->calculate->multiply(4,1));
    }
    public function testAdd2() {
        $this->assertEquals(5,$this->calculate->add(4,1));
    }
    public function testSubtract() {
        $this->assertEquals(3,$this->calculate->subtract(4,1));
    }
    // public function testCheckMatchTrue() {
    //     $this->assertTrue($this->calculate->checkMatch(2,2));
    // }
    // public function testCheckMatchFalse() {
    //     $this->assertFalse($this->calculate->checkMatch(2,1));
    // }
}
