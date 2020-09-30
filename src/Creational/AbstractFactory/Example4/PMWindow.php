<?php

namespace Src\Creational\AbstractFactory\Example4;

class PMWindow implements WindowInterface
{
    public function say() : void
    {
        print("I am PMWindow");
    }
}