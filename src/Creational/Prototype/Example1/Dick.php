<?php

namespace Src\Creational\Prototype\Example1;

class Dick implements PersonInterface
{
    const NAME = "Dick";

    public function clone(): PersonInterface
    {
        return new Dick();
    }

    public function __toString()
    {
        return self::NAME;
    }
}