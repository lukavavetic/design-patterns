<?php

namespace Src\Creational\Builder\HTMLPage;

class HTMLPageDirector extends AbstractPageDirector
{
    private AbstractPageBuilder $builder;

    public function __construct(AbstractPageBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function buildPage() : void
    {
        $this->builder->setTitle('Testing the HTMLPage');
        $this->builder->setHeading('Testing the HTMLPage');
        $this->builder->setText('Testing, testing, testing!');
        $this->builder->formatPage();
    }

    public function getPage() : HTMLPage
    {
        return $this->builder->getPage();
    }
}