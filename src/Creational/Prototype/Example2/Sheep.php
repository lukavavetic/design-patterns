<?php

namespace Src\Creational\Prototype\Example2;

class Sheep implements AnimalInterface
{
    public function __construct()
    {
        print_r("Sheep is made!");
    }

    public function __clone()
    {
        print_r("Sheep is being made!");
    }
}
