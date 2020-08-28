<?php

namespace Src\Creational\Builder\Example3;

interface ItemInterface
{
    public function name() : string;
    public function packing() : PackingInterface;
    public function price() : float;
}