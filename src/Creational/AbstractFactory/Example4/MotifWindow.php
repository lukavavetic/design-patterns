<?php

namespace Src\Creational\AbstractFactory\Example4;

class MotifWindow implements WindowInterface
{
    public function say() : void
    {
        print("I am MotifWindow");
    }
}