<?php

namespace Src\Creational\Builder\Example5;

abstract class AbstractBuilder
{
    protected Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public abstract function buildPartA() : void;
    public abstract function buildPartB() : void;
    public abstract function buildPartC() : void;

    public function getProduct() : Product
    {
        return $this->product;
    }
}