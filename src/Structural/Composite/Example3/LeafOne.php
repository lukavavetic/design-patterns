<?php

namespace Src\Structural\Composite\Example3;

class LeafOne implements ComponentInterface
{
    public function operation() : void
    {
        print("LeafOne");
    }
}