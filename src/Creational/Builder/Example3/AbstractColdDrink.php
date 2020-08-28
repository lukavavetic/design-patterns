<?php

namespace Src\Creational\Builder\Example3;

abstract class AbstractColdDrink implements ItemInterface
{
    public function packing(): PackingInterface
    {
        return new Bottle();
    }

    public abstract function price() : float;
}