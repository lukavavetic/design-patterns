<?php

namespace Src\Structural\Decorator\Example2;

class Client
{
    public function run()
    {
        $basicPizza = new Tomato(new Mozzarella(new PizzaImplementation));

        print($basicPizza->getDescription());
        print("\n");
        print($basicPizza->getCost());
    }
}