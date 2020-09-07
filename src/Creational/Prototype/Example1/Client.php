<?php

namespace Src\Creational\Prototype\Example1;

class Client
{
    public function run()
    {
        $type = "tom";
        Factory::__constructStatic();

        $person = Factory::getPrototype($type);

        print($person);
    }
}