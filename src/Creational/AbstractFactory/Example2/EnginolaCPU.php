<?php

namespace Src\Creational\AbstractFactory\Example2;

class EnginolaCPU extends CPU
{
    private string $description = "I am Enginola CPU";

    public function getDescription() : string
    {
        return $this->description;
    }
}