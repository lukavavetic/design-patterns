<?php

namespace Src\Structural\Decorator\Example4;

class ComponentImplementation implements ComponentInterface
{
    public function operation() : string
    {
        return "Component Operation";
    }
}