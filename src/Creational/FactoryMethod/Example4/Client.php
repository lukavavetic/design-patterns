<?php

namespace Src\Creational\FactoryMethod\Example4;

class Client
{
    public function run() : void
    {
        $app = new MyApplication();

        $app->newDocument();
    }
}