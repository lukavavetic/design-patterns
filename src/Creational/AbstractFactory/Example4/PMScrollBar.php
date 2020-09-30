<?php

namespace Src\Creational\AbstractFactory\Example4;

class PMScrollBar implements ScrollBarInterface
{
    public function say() : void
    {
        print("I am PMScrollBar");
    }
}