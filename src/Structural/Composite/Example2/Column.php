<?php

namespace Src\Structural\Composite\Example2;

class Column extends Composite
{
    public function __construct(int $value)
    {
        parent::__construct($value);
    }

    public function traverse() : void
    {
        print("Column");
    }
}