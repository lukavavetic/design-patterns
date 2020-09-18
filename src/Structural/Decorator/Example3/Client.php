<?php

namespace Src\Structural\Decorator\Example3;

class Client
{
    public function run()
    {
        $widget = new BorderDecorator(new ScrollDecorator(new TextField(10, 20)));

        print($widget->draw());
    }
}