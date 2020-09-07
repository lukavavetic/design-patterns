<?php

namespace Src\Creational\Prototype\Example1;

class Harry implements PersonInterface
{
    const NAME = "Harry";

    public function clone(): PersonInterface
    {
        return new Harry();
    }

    public function __toString()
    {
        return self::NAME;
    }
}