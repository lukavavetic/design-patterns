<?php

namespace Src\Creational\Builder\Example5;

class ConcreteBuilder extends AbstractBuilder
{
    public function buildPartA(): void
    {
        $this->product->setPartA("Part A");
    }

    public function buildPartB(): void
    {
        $this->product->setPartB("Part B");
    }

    public function buildPartC(): void
    {
        $this->product->setPartC("Part C");
    }
}