<?php

namespace Src\Creational\Builder\Example3;

class Bottle implements PackingInterface
{
    public function pack(): string
    {
        return "Bottle";
    }
}