<?php

namespace Src\Creational\Builder\HTMLPage;

abstract class AbstractPageBuilder
{
    abstract function getPage() : HTMLPage;
}
