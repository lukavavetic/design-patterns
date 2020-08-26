<?php

namespace Src\Creational\Builder\Pizza;

/** Concrete Builder */
class SpicyPizzaBuilder extends PizzaBuilder
{
    public function buildDough(): void
    {
        $this->pizza->setDough("pan baked");
    }

    public function buildSauce(): void
    {
        $this->pizza->setSauce("hot");
    }

    public function buildTopping(): void
    {
        $this->pizza->setTopping("pepperoni+salami");
    }
}