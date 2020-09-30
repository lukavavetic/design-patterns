<?php

namespace Src\Creational\AbstractFactory\Example4;

class Client
{
    public function run()
    {
        $widget = new Widget();

        $motifWidgetFactory = new MotifWidgetFactory();

        $widget->make($motifWidgetFactory);
    }
}