<?php

namespace Src\Creational\Builder\Example4;

class Client
{
    public function run()
    {
        $iglooBuilder = new IglooHouseBuilder(); //builder
        $civilEngineer = new CivilEngineer($iglooBuilder); //director

        $civilEngineer->constructHouse();

        $house = $civilEngineer->getHouse();

        print_r($iglooBuilder->getHouse());
    }
}