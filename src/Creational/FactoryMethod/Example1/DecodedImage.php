<?php

namespace Src\Creational\FactoryMethod\Example1;

class DecodedImage
{
    private string $image;

    public function __construct(string $image)
    {
        $this->image = $image;
    }

    public function toString() : string
    {
        return $this->image." is decoded!";
    }
}