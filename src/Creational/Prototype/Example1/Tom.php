<?php

namespace Src\Creational\Prototype\Example1;

class Tom implements PersonInterface
{
    const NAME = "Tom";

    public function __clone()
    {

    }

    public function __toString()
    {
        return self::NAME;
    }
}