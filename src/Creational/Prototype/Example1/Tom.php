<?php

namespace Src\Creational\Prototype\Example1;

class Tom implements PersonInterface
{
    const NAME = "Tom";

    public function clone(): PersonInterface
    {
        return new Tom();
    }

    public function __toString()
    {
        return self::NAME;
    }
}