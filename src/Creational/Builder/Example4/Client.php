<?php

namespace Src\Creational\Builder\Example4;

class Client
{
    public function run()
    {
        $iglooBuilder = new IglooHouseBuilder();
        $civilEngineer = new CivilEngineer($iglooBuilder);

        $civilEngineer->constructHouse();

        $house = $civilEngineer->getHouse();

        print_r($house);
    }
}