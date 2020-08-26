<?php

namespace Src\Creational\AbstractFactory;

class SamsMySQLBook extends AbstractMySQLBook {
    private string $author;
    private string $title;

    function __construct() {
        $this->author = 'Paul Dubois';
        $this->title = 'MySQL, 3rd Edition';
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