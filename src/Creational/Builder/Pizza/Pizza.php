<?php

namespace Src\Creational\Builder\Pizza;

/** Product */
class Pizza
{
    private string $dough;
    private string $sauce;
    private string $topping;

    public function setDough(string $dough): void
    {
        $this->dough = $dough;
    }

    public function setSauce(string $sauce): void
    {
        $this->sauce = $sauce;
    }

    public function setTopping(string $topping): void
    {
        $this->topping = $topping;
    }
}