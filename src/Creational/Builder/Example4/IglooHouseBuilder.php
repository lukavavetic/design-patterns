<?php

namespace Src\Creational\Builder\Example4;

class IglooHouseBuilder implements HouseBuilderInterface
{
    private House $house;

    public function __construct()
    {
        $this->house = new House();
    }

    public function buildBasement(): void
    {
        $this->house->setBasement("Ice Bars");
    }

    public function buildStructure(): void
    {
        $this->house->setStructure("Ice Blocks");
    }

    public function buildRoof(): void
    {
        $this->house->setRoof("Ice Dome");
    }

    public function buildInterior(): void
    {
        $this->house->setRoof("Ice Carvings");
    }

    public function getHouse(): House
    {
        return $this->house;
    }

}