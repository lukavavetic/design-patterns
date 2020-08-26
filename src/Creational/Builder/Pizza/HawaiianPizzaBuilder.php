<?php

namespace Src\Creational\Builder\Pizza;

/** Concrete Builder */
class HawaiianPizzaBuilder extends PizzaBuilder
{
    public function buildDough(): void
    {
        $this->pizza->setDough("cross");
    }

    public function buildSauce(): void
    {
        $this->pizza->setSauce("mild");
    }

    public function buildTopping(): void
    {
        $this->pizza->setTopping("ham+pineapple");
    }
}