<?php

namespace Src\Creational\FactoryMethod\Example2;

class Client
{
    public function run()
    {
        $factory = new OReillyFactoryMethod();

        $book = $factory->makePHPBook(ParamEnum::US);

        if ('Programming PHP' == $book->getTitle()) {
            echo "Asserted True";
        }
    }
}