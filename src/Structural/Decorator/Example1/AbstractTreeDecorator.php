<?php

namespace Src\Structural\Decorator\Example1;

abstract class AbstractTreeDecorator implements ChristmasTreeInterface
{
    private ChristmasTreeInterface $tree;

    public function __construct(ChristmasTreeInterface $tree)
    {
        $this->tree = $tree;
    }

    public function decorate(): string
    {
        return $this->tree->decorate();
    }
}