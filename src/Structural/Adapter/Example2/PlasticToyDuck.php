<?php

namespace Src\Structural\Adapter\Example2;

class PlasticToyDuck implements ToyDuckInterface
{
    public function squeak(): void
    {
        print("Squeak!");
    }
}