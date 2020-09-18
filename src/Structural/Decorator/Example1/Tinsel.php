<?php

namespace Src\Structural\Decorator\Example1;

class Tinsel extends AbstractTreeDecorator
{
    public function decorate(): string
    {
        return parent::decorate().$this->decorateWithTinsel();
    }

    public function decorateWithTinsel(): string
    {
        return " with Tinsel";
    }
}