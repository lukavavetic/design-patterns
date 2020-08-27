<?php

namespace Src\Creational\AbstractFactory\Example1;

class OReillyPHPBook extends AbstractPHPBook {
    private string $author;
    private string $title;

    private static $oddOrEven = 'odd';

    function __construct()
    {
        //alternate between 2 books
        if ('odd' == self::$oddOrEven) {
            $this->author = 'Rasmus Lerdorf and Kevin Tatroe';
            $this->title = 'Programming PHP';
            self::$oddOrEven = 'even';
        }
        else {
            $this->author = 'David Sklar and Adam Trachtenberg';
            $this->title = 'PHP Cookbook';
            self::$oddOrEven = 'odd';
        }
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