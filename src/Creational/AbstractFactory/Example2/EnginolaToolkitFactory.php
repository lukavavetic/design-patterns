<?php

namespace Src\Creational\AbstractFactory\Example2;

class EnginolaToolkitFactory extends AbstractFactory
{
    public function createCPU(): CPU
    {
        return new EnginolaCPU();
    }

    public function createMMU(): MMU
    {
        return new EnginolaMMU();
    }

}