<?php

namespace Src\Structural\Decorator\Example4;

class ConcreteDecoratorB extends AbstractDecorator
{
    public function operation() : string
    {
        return parent::operation()." Decorator B";
    }
}