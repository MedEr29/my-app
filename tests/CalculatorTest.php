<?php
use PHPUnit\Framework\TestCase;

require_once './calculator.php';

class CalculatorTest extends TestCase {
    public function testAdd() {
        $calculator = new Calculator();
        $this->assertEquals(3, $calculator->add(1, 2));
    }
}
?>
