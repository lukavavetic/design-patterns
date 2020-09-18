<?php

namespace Src\Structural\Decorator\Example4;

abstract class AbstractDecorator implements ComponentInterface
{
    private ComponentInterface $component;

    public function __construct(ComponentInterface $component)
    {
        $this->component = $component;
    }

    public function operation() : string
    {
        return $this->component->operation();
    }
}