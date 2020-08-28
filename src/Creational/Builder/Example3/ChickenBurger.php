<?php

namespace Src\Creational\Builder\Example3;

class ChickenBurger extends AbstractBurger
{
    public function price(): float
    {
        return 50.5;
    }

    public function name(): string
    {
        return "Chicken Burger";
    }
}