<?php

namespace Src\Creational\Prototype\Example1;

class Harry implements PersonInterface
{
    const NAME = "Harry";

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function __toString()
    {
        return self::NAME;
    }
}