<?php

namespace Src\Structural\Composite\Example3;

class Composite implements ComponentInterface
{
    private array $leafs;

    public function add(ComponentInterface $component) : void
    {
        $this->leafs[] = $component;
    }

    public function operation() : void
    {
        foreach ($this->leafs as $leaf) {
            $leaf->operation();
        }
    }
}