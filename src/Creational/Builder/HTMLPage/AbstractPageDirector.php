<?php

namespace Src\Creational\Builder\HTMLPage;

abstract class AbstractPageDirector
{
    abstract function __construct(AbstractPageBuilder $builderIn);
    abstract function buildPage() : void;
    abstract function getPage() : HTMLPage;
}