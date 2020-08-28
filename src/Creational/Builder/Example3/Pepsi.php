<?php

namespace Src\Creational\Builder\Example3;

class Pepsi extends AbstractColdDrink
{
    public function price(): float
    {
        return floatval(35.0);
    }

    public function name(): string
    {
        return "Pepsi";
    }
}