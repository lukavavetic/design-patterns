<?php

namespace Src\Creational\Builder\Example4;

class TipiHouseBuilder implements HouseBuilderInterface
{
    private House $house;

    public function __construct()
    {
        $this->house = new House();
    }

    public function buildBasement(): void
    {
        $this->house->setBasement("Wooden Poles");
    }

    public function buildStructure(): void
    {
        $this->house->setStructure("Wood and Ice");
    }

    public function buildRoof(): void
    {
        $this->house->setRoof("Wood, caribou and seal skines");
    }

    public function buildInterior(): void
    {
        $this->house->setRoof("Fire Wood");
    }

    public function getHouse(): House
    {
        return $this->house;
    }

}