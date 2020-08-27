<?php

require "../vendor/autoload.php";

use Src\Creational\AbstractFactory\Example1\AbstractFactoryTest;
use Src\Creational\Builder\HTMLPage\HTMLPageBuilderTest;
use Src\Creational\Builder\Pizza\PizzaBuilderTest;
use Src\Creational\AbstractFactory\Example2\Client;


//(new AbstractFactoryTest())->run();
//(new HTMLPageBuilderTest())->run();
//(new PizzaBuilderTest())->run();
print_r((new Client())->run());












