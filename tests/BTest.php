<?php


namespace Abc;

use Codeception\Test\Unit;
use ozada\Abc\B;
use PHPUnit\Framework\MockObject\MockObject;

/**
 * Class BTest
 * @package Abc
 * @coversDefaultClass \ozada\Abc\B
 */
class BTest extends Unit
{
    /** @var B | MockObject */
    protected $object;

    protected function _setUp()
    {
        $this->object = new B();
    }

    /**
     * @group unit
     * @small
     * @covers ::__construct
     * @covers ::getState
     */
    public function testConstructor()
    {
        $this->assertEquals(B::OFF, $this->object->getState());
    }


    /**
     * @group unit
     * @small
     * @covers ::boom
     */
    public function testBoom()
    {
        $this->assertEquals("boom", $this->object->boom());
    }

    /**
     * @group unit
     * @small
     * @covers ::turnOn
     */
    public function testTurnOn()
    {
        $this->object->turnOn();
        $this->assertEquals(B::ON, $this->object->getState());
    }
}