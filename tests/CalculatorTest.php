<?php


class CalculatorTest extends PHPUnit\Framework\TestCase
{
    public function testAdd()
    {
        $calculator = new App\Calculator();

        $this->assertEquals(9, $calculator->add(4, 5));       
        $this->assertEquals(-2, $calculator->add(2, -4));

        
    }
}
?>