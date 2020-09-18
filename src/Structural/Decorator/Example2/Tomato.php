<?php

namespace Src\Structural\Decorator\Example2;

class Tomato extends ToppingDecorator
{
    public function getDescription() : string
    {
        return parent::getDescription()." Tomato";
    }

    public function getCost() : float
    {
        return parent::getCost() + 0.33;
    }
}