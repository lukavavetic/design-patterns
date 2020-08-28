<?php

namespace Src\Creational\Builder\Example1;

abstract class AbstractPageBuilder
{
    abstract function getPage() : HTMLPage;
}
