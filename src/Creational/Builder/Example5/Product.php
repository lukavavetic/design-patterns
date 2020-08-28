<?php

namespace Src\Creational\Builder\Example5;

class Product
{
    private string $partA;
    private string $partB;
    private string $partC;

    public function setPartA(string $partA): void
    {
        $this->partA = $partA;
    }

    public function setPartB(string $partB): void
    {
        $this->partB = $partB;
    }

    public function setPartC(string $partC): void
    {
        $this->partC = $partC;
    }
}