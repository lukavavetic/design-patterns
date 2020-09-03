<?php

namespace Src\Creational\FactoryMethod\Example2;

class VisualQuickstartPHPBook extends AbstractPHPBook
{
    private string $author;
    private string $title;

    public function __construct()
    {
        $this->author = 'Larry Ullman';
        $this->title  = 'PHP for the World Wide Web';
    }

    public function getAuthor() : string {return $this->author;}
    public function getTitle() : string {return $this->title;}
}