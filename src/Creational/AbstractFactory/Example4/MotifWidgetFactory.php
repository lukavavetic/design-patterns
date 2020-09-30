<?php

namespace Src\Creational\AbstractFactory\Example4;

class MotifWidgetFactory extends AbstractWidgetFactory
{
    function createScrollBar(): MotifScrollBar
    {
        return new MotifScrollBar();
    }

    function createWindow(): MotifWindow
    {
        return new MotifWindow();
    }
}