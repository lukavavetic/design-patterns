<?php

namespace Src\Structural\Composite\Example3;

class LeafTwo implements ComponentInterface
{
    public function operation() : void
    {
        print("LeafTwo");
    }
}