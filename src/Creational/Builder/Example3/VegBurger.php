<?php

namespace Src\Creational\Builder\Example3;

class VegBurger extends AbstractBurger
{
    public function price(): float
    {
        return 25.0;
    }

    public function name(): string
    {
        return "Veg Burger";
    }
}