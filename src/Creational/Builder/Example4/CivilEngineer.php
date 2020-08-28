<?php

namespace Src\Creational\Builder\Example4;

class CivilEngineer
{
    private HouseBuilderInterface $houseBuilder;

    public function __construct(HouseBuilderInterface $houseBuilder)
    {
        $this->houseBuilder = $houseBuilder;
    }

    public function getHouse() : House
    {
        return $this->houseBuilder->getHouse();
    }

    public function constructHouse() : void
    {
        $this->houseBuilder->buildBasement();
        $this->houseBuilder->buildStructure();
        $this->houseBuilder->buildRoof();
        $this->houseBuilder->buildInterior();
    }
}