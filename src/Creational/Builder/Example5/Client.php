<?php

namespace Src\Creational\Builder\Example5;

class Client
{
    public function run() : void
    {
        $concreteBuilder = new ConcreteBuilder();
        $director = new Director($concreteBuilder);

        $director->make();

        print_r($concreteBuilder->getProduct());
    }
}