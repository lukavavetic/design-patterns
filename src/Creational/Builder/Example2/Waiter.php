<?php

namespace Src\Creational\Builder\Example2;

/** Director */
class Waiter
{
    private PizzaBuilder $pizzaBuilder;

    public function setPizzaBuilder(PizzaBuilder $pizzaBuilder) : void
    {
        $this->pizzaBuilder = $pizzaBuilder;
    }

    public function getPizza() : Pizza
    {
        return $this->pizzaBuilder->getPizza();
    }

    public function constructPizza() : void
    {
        $this->pizzaBuilder->createNewPizzaProduct();
        $this->pizzaBuilder->buildDough();
        $this->pizzaBuilder->buildSauce();
        $this->pizzaBuilder->buildTopping();
    }
}