<?php

namespace Src\Structural\Decorator\Example1;

class BubbleLight extends AbstractTreeDecorator
{
    public function decorate(): string
    {
        return parent::decorate().$this->decorateWithBubbleLights();
    }

    public function decorateWithBubbleLights(): string
    {
        return " with Bubble Lights";
    }
}