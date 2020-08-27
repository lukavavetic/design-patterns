<?php

namespace Src\Creational\AbstractFactory\Example2;

abstract class AbstractFactory
{
    //Returns a concrete factory object that is an instance of the
    //concrete factory class appropriate for the given architecture.
    public static function getFactory(string $architecture) : AbstractFactory
    {
        $factory = null;

        switch ($architecture) {
            case ArchitectureEnum::ENGINOLA:
                $factory = new EnginolaToolkitFactory();
                break;

            case ArchitectureEnum::EMBER:
                $factory = new EmberToolkitFactory();
                break;
        }

        return $factory;
    }

    public abstract function createCPU() : CPU;
    public abstract function createMMU() : MMU;
}