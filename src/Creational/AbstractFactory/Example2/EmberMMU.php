<?php

namespace Src\Creational\AbstractFactory\Example2;

class EmberMMU extends MMU
{
    private string $description = "I am Ember MMU";

    public function getDescription() : string
    {
        return $this->description;
    }
}