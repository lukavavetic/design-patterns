<?php

namespace Src\Creational\FactoryMethod\Example4;

abstract class AbstractDocument
{
    public abstract function open(): void;
    public abstract function close(): void;
    public abstract function save(): void;
    public abstract function revert(): void;
}