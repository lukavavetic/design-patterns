<?php

namespace Src\Creational\AbstractFactory\Example3;

abstract class AbstractShape
{
    protected int $id;
    protected static int $total = 0;

    public function __construct()
    {
        $this->id = self::$total++;
    }

    public abstract function draw() : string;
}