<?php

namespace Src\Creational\AbstractFactory\Example2;

class EmberToolkitFactory extends AbstractFactory
{
    public function createCPU(): CPU
    {
        return new EmberCPU();
    }

    public function createMMU(): MMU
    {
        return new EmberMMU();
    }

}