<?php

namespace Src\Creational\Builder\Example5;

class Director
{
    private ConcreteBuilder $concreteBuilder;

    public function __construct(ConcreteBuilder $concreteBuilder)
    {
        $this->concreteBuilder = $concreteBuilder;
    }

    public function make() : void
    {
        $this->concreteBuilder->buildPartA();
        $this->concreteBuilder->buildPartB();
        $this->concreteBuilder->buildPartC();
    }
}