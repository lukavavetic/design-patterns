<?php

namespace Src\Structural\Decorator\Example3;

class BorderDecorator extends AbstractDecorator
{
    public function draw() : string
    {
        return parent::draw()." Border Decorator";
    }
}