<?php

namespace Src\AbstractFactory;

abstract class AbstractBook {
    abstract function getAuthor() : string;
    abstract function getTitle() : string;
}