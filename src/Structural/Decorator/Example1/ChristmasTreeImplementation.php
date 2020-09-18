<?php

namespace Src\Structural\Decorator\Example1;

class ChristmasTreeImplementation implements ChristmasTreeInterface
{
    public function decorate(): string
    {
        return "Christmas tree";
    }
}