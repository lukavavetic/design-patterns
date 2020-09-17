<?php

namespace Src\Structural\Bridge\Example1;

class Client
{
    public function run()
    {
        $shape = new Square(new Red());

        print($shape->draw());
    }
}