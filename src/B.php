<?php


namespace ozada\Abc;

/**
 * Class B
 * @package ozada\Abc
 */
class B
{
    const OFF = "off";
    const ON = "on";

    /** @var string */
    private $state;

    /**
     * B constructor.
     */
    public function __construct()
    {
        $this->state = self::OFF;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return string
     */
    public function boom()
    {
        return "boom";
    }

    public function turnOn()
    {
        $this->state = self::ON;
    }
}