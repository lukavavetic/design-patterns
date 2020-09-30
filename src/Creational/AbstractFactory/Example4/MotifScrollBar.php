<?php

namespace Src\Creational\AbstractFactory\Example4;

class MotifScrollBar implements ScrollBarInterface
{
    public function say() : void
    {
        print("I am MotifScrollBar");
    }
}