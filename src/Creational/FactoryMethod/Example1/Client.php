<?php

namespace Src\Creational\FactoryMethod\Example1;

class Client
{
    public function run()
    {
        $imageFileName = fgets(STDIN);

        $exploded = explode(".", $imageFileName);

        $imageName = $exploded[0];
        $format = preg_replace('/\s+/', '',  $exploded[1]);;

        $reader = null;

        if ($format === "gif") {
            $reader = new GifReader($imageName);
        }

        if ($format === "jpeg") {
            $reader = new JpegReader($imageName);
        }

        if ($reader) {
            $decodedImage = $reader->getDecodeImage();

            echo $decodedImage->toString();
        }
    }
}