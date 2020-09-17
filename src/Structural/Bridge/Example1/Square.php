<?php

namespace Src\Structural\Bridge\Example1;

class Square extends AbstractShape
{
    function draw(): string
    {
        return "Square drawn with: ".$this->color->fill();
    }
}