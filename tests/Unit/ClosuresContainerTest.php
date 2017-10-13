<?php namespace Lachezargrigorov\ClosuresContainer\Tests\Unit;

use Lachezargrigorov\ClosuresContainer\ClosuresContainer;
use PHPUnit\Framework\TestCase;

class ClosuresContainerTest extends TestCase
{
    protected $closuresContainer;

    public function setUp()
    {
        parent::setUp();

        $this->closuresContainer = ClosuresContainer::getInstance();

        $this->closuresContainer->register("sumTwoNumbers",function($a,$b)
        {
            return $a + $b;
        });
    }

    public function testRegister()
    {
        $this->assertEquals(3,$this->closuresContainer->sumTwoNumbers(1,2));
    }

    public function testIsRegistered()
    {
        $this->assertTrue($this->closuresContainer->isRegistered("sumTwoNumbers"));
        $this->assertFalse($this->closuresContainer->isRegistered("otherClosure"));
    }
    
}
