<?php

namespace Src\Creational\Builder\Example3;

class Wrapper implements PackingInterface
{
    public function pack(): string
    {
        return "Wrapper";
    }
}