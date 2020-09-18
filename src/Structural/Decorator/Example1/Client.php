<?php

namespace Src\Structural\Decorator\Example1;

class Client
{
    public function run()
    {
        $tree = new BubbleLight(new ChristmasTreeImplementation);

        print($tree->decorate());
    }
}