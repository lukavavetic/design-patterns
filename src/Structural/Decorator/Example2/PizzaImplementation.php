<?php

namespace Src\Structural\Decorator\Example2;

class PizzaImplementation implements PizzaInterface
{
    public function getDescription() : string
    {
        return "Thin Dough";
    }

    public function getCost() : float
    {
        return 4.41;
    }
}