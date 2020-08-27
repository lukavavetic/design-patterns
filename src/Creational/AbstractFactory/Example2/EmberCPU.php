<?php

namespace Src\Creational\AbstractFactory\Example2;

class EmberCPU extends CPU
{
    private string $description = "I am Ember CPU";

    public function getDescription() : string
    {
        return $this->description;
    }
}