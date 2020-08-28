<?php

namespace Src\Creational\Builder\Example1;

class HTMLPageBuilderTest
{
    public function run()
    {
        print_r('BEGIN TESTING BUILDER PATTERN');
        print_r("\n");

        $pageBuilder = new HTMLPageBuilder();
        $pageDirector = new HTMLPageDirector($pageBuilder);
        $pageDirector->buildPage();
        $page = $pageDirector->getPage();
        print_r($page->showPage());
        print_r("\n");

        print_r('END TESTING BUILDER PATTERN');
    }
}