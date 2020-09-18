<?php

namespace Src\Structural\Decorator\Example4;

class Client
{
    public function run()
    {
        $component = new ConcreteDecoratorA(new ConcreteDecoratorB(new ComponentImplementation()));

        print($component->operation());
    }
}