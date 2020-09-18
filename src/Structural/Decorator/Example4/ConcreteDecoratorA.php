<?php

namespace Src\Structural\Decorator\Example4;

class ConcreteDecoratorA extends AbstractDecorator
{
    public function operation() : string
    {
        return parent::operation()." Decorator A";
    }
}