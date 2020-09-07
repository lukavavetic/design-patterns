<?php

namespace Src\Creational\Prototype\Example2;

class Factory
{
    public function getClone(AnimalInterface $animal) : AnimalInterface
    {
        return clone $animal;
    }
}
