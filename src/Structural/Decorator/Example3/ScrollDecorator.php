<?php

namespace Src\Structural\Decorator\Example3;

class ScrollDecorator extends AbstractDecorator
{
    public function draw() : string
    {
        return parent::draw()." Scroll Decorator";
    }
}