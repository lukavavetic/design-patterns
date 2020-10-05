<?php

namespace Src\Creational\FactoryMethod\Example4;

abstract class AbstractApplication
{
    public abstract function createDocument(): AbstractDocument;

    public function newDocument(): void
    {
        $document = $this->createDocument();
        $document->open();
    }

    public function openDocument(): void
    {

    }
}