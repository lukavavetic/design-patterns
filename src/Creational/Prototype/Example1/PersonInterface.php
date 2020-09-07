<?php

namespace Src\Creational\Prototype\Example1;

interface PersonInterface
{
    public function clone() : PersonInterface;
}