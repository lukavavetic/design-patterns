<?php

namespace Src\AbstractFactory;

abstract class AbstractBookFactory {
    abstract function makePHPBook() : AbstractPHPBook;
    abstract function makeMySQLBook() : AbstractMySQLBook;
}