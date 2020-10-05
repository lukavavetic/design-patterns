<?php

namespace Src\Creational\FactoryMethod\Example4;

class MyApplication extends AbstractApplication
{
    public function createDocument(): MyDocument
    {
        return new MyDocument();
    }
}