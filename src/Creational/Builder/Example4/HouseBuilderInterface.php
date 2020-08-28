<?php

namespace Src\Creational\Builder\Example4;

interface HouseBuilderInterface
{
    public function buildBasement() : void;
    public function buildStructure() : void;
    public function buildRoof() : void;
    public function buildInterior() : void;
    public function getHouse() : House;
}