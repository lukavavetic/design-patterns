<?php

namespace Src\Creational\Builder\Example3;

abstract class AbstractBurger implements ItemInterface
{
    public function packing(): PackingInterface
    {
        return new Wrapper();
    }

    public abstract function price() : float;
}