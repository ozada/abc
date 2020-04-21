<?php


namespace Abc;

use Codeception\Test\Unit;
use ozada\Abc\A;
use PHPUnit\Framework\MockObject\MockObject;

/**
 * Class ATest
 * @package Abc
 * @coversDefaultClass \ozada\Abc\A
 */
class ATest extends Unit
{
    /** @var A | MockObject */
    protected $object;

    protected function _setUp()
    {
        $this->object = new A();
    }

    /**
     * @group unit
     * @small
     * @covers ::foo
     */
    public function testFoo()
    {
        $this->assertEquals("baz", $this->object->foo());
    }

    /**
     * Test
     * @return \Generator
     */
    public function MD5DataProvider()
    {
        yield "T1" => ["test", md5("test")];
        yield "T2" => ["test1", md5("test1")];
        yield "T3" => ["test2", md5("test2")];
        yield "T4" => ["test3", md5("test3")];
    }

    /**
     * @group unit
     * @small
     * @covers ::baz
     * @dataProvider MD5DataProvider
     * @param string $value
     * @param string $expected
     */
    public function testBaz($value, $expected)
    {
        $this->assertEquals($expected, $this->object->baz($value));
    }

    /**
     * @group unit
     * @small
     * @covers ::baz
     */
    public function testNotBaz()
    {
        $this->assertNotEquals("NOT", $this->object->baz("OK"));
    }
}