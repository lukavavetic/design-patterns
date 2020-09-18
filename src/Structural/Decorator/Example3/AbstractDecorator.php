<?php

namespace Src\Structural\Decorator\Example3;

abstract class AbstractDecorator implements WidgetInterface
{
    private WidgetInterface $widget;

    public function __construct(WidgetInterface $widget)
    {
        $this->widget = $widget;
    }

    public function draw() : string
    {
        return $this->widget->draw();
    }
}