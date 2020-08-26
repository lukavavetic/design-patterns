<?php

namespace Src\Creational\Builder\Pizza;

class PizzaBuilderTest
{
    public function run()
    {
        $waiter = new Waiter();

        $hawaiianPizzabuilder = new HawaiianPizzaBuilder();
        $spicyPizzaBuilder = new SpicyPizzaBuilder();

        $waiter->setPizzaBuilder($hawaiianPizzabuilder);
        $waiter->constructPizza();

        $hawaiianPizza = $waiter->getPizza();

        var_dump($hawaiianPizza);

        $waiter->setPizzaBuilder($spicyPizzaBuilder);
        $waiter->constructPizza();

        $spicyPizza = $waiter->getPizza();

        var_dump($spicyPizza);
    }
}