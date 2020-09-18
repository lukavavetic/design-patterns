<?php

namespace Src\Structural\Decorator\Example1;

class Garland extends AbstractTreeDecorator
{
    public function decorate(): string
    {
        return parent::decorate().$this->decorateWithGarland();
    }

    public function decorateWithGarland(): string
    {
        return " with Garland";
    }
}