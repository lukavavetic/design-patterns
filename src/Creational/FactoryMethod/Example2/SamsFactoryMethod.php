<?php

namespace Src\Creational\FactoryMethod\Example2;

class SamsFactoryMethod extends AbstractFactoryMethod {
    private $context = "Sams";

    public function makePHPBook(string $param) : AbstractPHPBook
    {
        $book = NULL;

        switch ($param) {
            case ParamEnum::US:
                $book = new SamsPHPBook;
                break;
            case ParamEnum::OTHER:
                $book = new OReillyPHPBook;
                break;
            case ParamEnum::OTHER_OTHER:
                $book = new VisualQuickstartPHPBook;
                break;
            default:
                $book = new SamsPHPBook;
                break;
        }

        return $book;
    }
}