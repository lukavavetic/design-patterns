<?php

namespace Src\Creational\Prototype\Example1;

class Dick implements PersonInterface
{
    const NAME = "Dick";

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function __toString()
    {
        return self::NAME;
    }
}