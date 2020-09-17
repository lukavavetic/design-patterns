<?php

namespace Src\Structural\Bridge\Example1;

class Red implements ColorInterface
{
    public function fill() : string
    {
        return "Color is red";
    }
}