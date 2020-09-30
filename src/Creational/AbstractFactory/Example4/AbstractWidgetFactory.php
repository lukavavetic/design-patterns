<?php

namespace Src\Creational\AbstractFactory\Example4;

abstract class AbstractWidgetFactory
{
    abstract function createScrollBar() : ScrollBarInterface;
    abstract function createWindow() : WindowInterface;
}