<?php

namespace Src\Structural\Decorator\Example2;

class Mozzarella extends ToppingDecorator
{
    public function getDescription() : string
    {
        return parent::getDescription()." Mozzarella";
    }

    public function getCost() : float
    {
        return parent::getCost() + 0.50;
    }
}