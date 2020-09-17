<?php

namespace Src\Structural\Bridge\Example1;

class Blue implements ColorInterface
{
    public function fill() : string
    {
        return "Color is blue";
    }
}