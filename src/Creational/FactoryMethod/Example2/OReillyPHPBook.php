<?php

namespace Src\Creational\FactoryMethod\Example2;

class OReillyPHPBook extends AbstractPHPBook
{
    private string $author;
    private string $title;

    function __construct() {
        $this->author = 'Rasmus Lerdorf and Kevin Tatroe';
        $this->title  = 'Programming PHP';
    }
    public function getAuthor() : string {return $this->author;}
    public function getTitle() : string {return $this->title;}
}