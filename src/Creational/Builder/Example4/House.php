<?php

namespace Src\Creational\Builder\Example4;

class House implements HousePlanInterface
{
    private string $basement;
    private string $structure;
    private string $roof;
    private string $interior;

    public function setBasement(string $basement): void
    {
        $this->basement = $basement;
    }

    public function setStructure(string $structure): void
    {
        $this->structure = $structure;
    }

    public function setRoof(string $roof): void
    {
        $this->roof = $roof;
    }

    public function setInterior(string $interior): void
    {
        $this->interior = $interior;
    }

}