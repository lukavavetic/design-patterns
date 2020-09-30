<?php

namespace Src\Creational\AbstractFactory\Example4;

class Widget
{
    public function make(AbstractWidgetFactory $factory)
    {
        $scrollBar = $factory->createScrollBar();
        $window = $factory->createWindow();

        $scrollBar->say();
        $window->say();
    }
}