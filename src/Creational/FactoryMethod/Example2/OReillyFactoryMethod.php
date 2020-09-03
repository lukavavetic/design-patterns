<?php

namespace Src\Creational\FactoryMethod\Example2;

class OReillyFactoryMethod extends AbstractFactoryMethod {
    private string $context = "OReilly";

    public function makePHPBook(string $param) : AbstractPHPBook
    {
        $book = NULL;

        switch ($param) {
            case ParamEnum::US:
                $book = new OReillyPHPBook;
                break;
            case ParamEnum::OTHER:
                $book = new SamsPHPBook;
                break;
            default:
                $book = new OReillyPHPBook;
                break;
        }

        return $book;
    }
}