<?php


namespace ozada\Abc;

/**
 * Class A
 * @package ozada\Abc
 */
class A
{
    /**
     * @return string
     */
    public function foo()
    {
        return "baz";
    }

    /**
     * @param string $foo
     * @return string
     */
    public function baz($foo)
    {
        return md5($foo);
    }
}