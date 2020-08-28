<?php

namespace Src\Creational\Builder\Example3;

class Coke extends AbstractColdDrink
{
    public function price(): float
    {
        return 30.0;
    }

    public function name(): string
    {
        return "Coke";
    }
}