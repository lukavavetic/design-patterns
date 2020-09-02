<?php

namespace Src\Creational\FactoryMethod\Example1;

class JpegReader implements ImageReaderInterface
{
    private DecodedImage $decodedImage;

    public function __construct(string $image)
    {
        $this->decodedImage = new DecodedImage($image);
    }

    public function getDecodeImage(): DecodedImage
    {
        return $this->decodedImage;
    }
}