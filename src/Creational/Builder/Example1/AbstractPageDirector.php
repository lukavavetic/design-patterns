<?php

namespace Src\Creational\Builder\Example1;

abstract class AbstractPageDirector
{
    abstract function __construct(AbstractPageBuilder $builderIn);
    abstract function buildPage() : void;
    abstract function getPage() : HTMLPage;
}