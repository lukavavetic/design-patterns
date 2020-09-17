<?php

namespace Src\Structural\Composite\Example2;

class Composite implements ComponentInterface
{
    private array $children;
    private int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function add(ComponentInterface $component) : void
    {
        $this->children[] = $component;
    }

    public function traverse() : void
    {
        print($this->value." ");

        foreach ($this->children as $child) {
            $child->traverse();
        }
    }
}