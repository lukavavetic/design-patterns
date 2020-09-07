<?php

namespace Src\Creational\Prototype\Example1;

class Client
{
    public function run()
    {
        $tom1 = new Tom();

        Factory::addPrototypes("tom", $tom1);

        $tom2 = Factory::getPrototype("tom");

        var_dump($tom1);
        var_dump($tom2);
    }
}