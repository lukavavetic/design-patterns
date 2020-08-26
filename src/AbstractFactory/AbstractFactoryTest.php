<?php

namespace Src\AbstractFactory;

class AbstractFactoryTest
{
    public function run()
    {
        print_r('BEGIN TESTING ABSTRACT FACTORY PATTERN ');
        print_r("\n");

        print_r('testing OReillyBookFactory');
        $bookFactoryInstance = new OReillyBookFactory;
        $this->testConcreteFactory($bookFactoryInstance);
        print_r("\n");

        print_r('testing SamsBookFactory');
        $bookFactoryInstance = new SamsBookFactory;
        $this->testConcreteFactory($bookFactoryInstance);

        print_r("END TESTING ABSTRACT FACTORY PATTERN");
        print_r("\n");
    }

    public function testConcreteFactory(AbstractBookFactory $bookFactoryInstance)
    {
        $phpBookOne = $bookFactoryInstance->makePHPBook();
        print_r('first php Author: '.$phpBookOne->getAuthor());
        print_r("\n");
        print_r('first php Title: '.$phpBookOne->getTitle());
        print_r("\n");

        $phpBookTwo = $bookFactoryInstance->makePHPBook();
        print_r('second php Author: '.$phpBookTwo->getAuthor());
        print_r("\n");
        print_r('second php Title: '.$phpBookTwo->getTitle());
        print_r("\n");

        $mySqlBook = $bookFactoryInstance->makeMySQLBook();
        print_r('MySQL Author: '.$mySqlBook->getAuthor());
        print_r("\n");
        print_r('MySQL Title: '.$mySqlBook->getTitle());
        print_r("\n");
    }
}