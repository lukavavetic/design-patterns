<?php

namespace Src\Structural\Composite\Example2;

class Client
{
    public function run()
    {

        $compositeFirst = new Composite(1);
        $compositSecond = new Column(2);
        $compositThird = new Column(3);
        $compositFourth = new Row(4);

        $compositeFirst->add($compositSecond);
        $compositeFirst->add($compositThird);
        $compositeFirst->add($compositFourth);
        $compositeFirst->add(new Primitive(5));
        $compositeFirst->add(new Primitive(6));

        $compositeFirst->traverse();

    }
}