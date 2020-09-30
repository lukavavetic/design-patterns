<?php

namespace Src\Creational\AbstractFactory\Example4;

class PMWidgetFactory extends AbstractWidgetFactory
{
    function createScrollBar(): PMScrollBar
    {
        return new PMScrollBar();
    }

    function createWindow(): PMWindow
    {
        return new PMWindow();
    }
}