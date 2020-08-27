<?php

namespace Src\Creational\AbstractFactory\Example2;

class Client
{
    public function run() : string
    {
        $factory = AbstractFactory::getFactory(ArchitectureEnum::EMBER);

        $cpu = $factory->createCPU();

        return $cpu->getDescription();
    }
}