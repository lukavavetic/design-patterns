<?php

namespace Src\Structural\Decorator\Example2;

abstract class ToppingDecorator implements PizzaInterface
{
    private PizzaInterface $pizza;

    public function __construct(PizzaInterface $pizza)
    {
        $this->pizza = $pizza;
    }

    public function getDescription() : string
    {
        return $this->pizza->getDescription();
    }

    public function getCost() : float
    {
        return $this->pizza->getCost();
    }
}