<?php

namespace Src\Creational\AbstractFactory;

class OReillyMySQLBook extends AbstractMySQLBook {
    private string $author;
    private string $title;

    function __construct() {
        $this->author = 'George Reese, Randy Jay Yarger, and Tim King';
        $this->title = 'Managing and Using MySQL';
    }

    public function getAuthor() : string
    {
        return $this->author;
    }

    public function getTitle() : string
    {
        return $this->title;
    }
}