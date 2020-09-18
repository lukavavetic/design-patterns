<?php

namespace Src\Structural\Decorator\Example3;

class TextField implements WidgetInterface
{
    private int $width;
    private int $height;

    public function __construct(int $width, int $height)
    {
        $this->width  = $width;
        $this->height = $height;
    }


    public function draw() : string
    {
        return "TextField: ".$this->width.", ".$this->height;
    }
}