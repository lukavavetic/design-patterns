<?php

namespace Src\Creational\Builder\Example4;

interface HousePlanInterface
{
    public function setBasement(string $basement) : void;
    public function setStructure(string $structure) : void;
    public function setRoof(string $roof) : void;
    public function setInterior(string $interior) : void;
}