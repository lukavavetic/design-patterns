<?php

namespace Src\Structural\Bridge\Example1;

abstract class AbstractShape
{
    protected ColorInterface $color;

    public function __construct(ColorInterface $color)
    {
        $this->color = $color;
    }

    abstract function draw() : string;
}