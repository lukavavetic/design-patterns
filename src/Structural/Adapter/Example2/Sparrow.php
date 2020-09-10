<?php

namespace Src\Structural\Adapter\Example2;

class Sparrow implements BirdInterface
{
    public function fly() : void
    {
        print("Flying...");
    }

    public function makeSound() : void
    {
        print("Chirp chirp!");
    }
}