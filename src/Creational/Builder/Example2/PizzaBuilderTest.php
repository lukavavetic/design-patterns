<?php

namespace Src\Creational\Builder\Example2;

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