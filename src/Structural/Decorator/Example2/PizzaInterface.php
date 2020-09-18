<?php

namespace Src\Structural\Decorator\Example2;

interface PizzaInterface
{
    public function getDescription() : string;
    public function getCost() : float;
}