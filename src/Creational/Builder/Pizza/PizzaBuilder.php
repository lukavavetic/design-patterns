<?php

namespace Src\Creational\Builder\Pizza;

/** Abstract Builder */
abstract class PizzaBuilder
{
    protected Pizza $pizza;

    public function getPizza() : Pizza
    {
        return $this->pizza;
    }

    public function createNewPizzaProduct() : void
    {
        $this->pizza = new Pizza();
    }

    public abstract function buildDough() : void;
    public abstract function buildSauce() : void;
    public abstract function buildTopping() : void;
}