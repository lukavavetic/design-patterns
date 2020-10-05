<?php

namespace Src\Creational\FactoryMethod\Example4;

class MyDocument extends AbstractDocument
{
    public function open(): void
    {
        print("Open the document");
    }

    public function close(): void
    {
        print("Close the document");
    }

    public function save(): void
    {
        print("Save the document");
    }

    public function revert(): void
    {
        print("Revert the document");
    }
}