<?php

namespace Src\Creational\Prototype\Example2;

class Client
{
    public function run()
    {
        $sheep = new Sheep();

        $factory = new Factory();

        $sheep2 = $factory->getClone($sheep);
    }
}