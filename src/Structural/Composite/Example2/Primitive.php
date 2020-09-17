<?php

namespace Src\Structural\Composite\Example2;

class Primitive implements ComponentInterface
{
    private int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function traverse() : void
    {
        print($this->value." ");
    }
}