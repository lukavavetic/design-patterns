<?php

namespace Src\Creational\FactoryMethod\Example1;

interface ImageReaderInterface
{
    public function getDecodeImage() : DecodedImage;
}

