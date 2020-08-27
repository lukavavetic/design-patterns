<?php

namespace Src\Creational\AbstractFactory\Example2;

class EnginolaMMU extends MMU
{
    private string $description = "I am Enginola MMU";

    public function getDescription() : string
    {
        return $this->description;
    }
}