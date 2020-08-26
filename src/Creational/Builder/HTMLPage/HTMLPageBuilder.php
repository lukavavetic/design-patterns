<?php

namespace Src\Creational\Builder\HTMLPage;

class HTMLPageBuilder extends AbstractPageBuilder {
    private HTMLPage $page;

    function __construct()
    {
        $this->page = new HTMLPage();
    }

    public function setTitle(string $title) : void
    {
        $this->page->setTitle($title);
    }

    public function setHeading($heading) : void
    {
        $this->page->setHeading($heading);
    }

    public function setText($text) : void
    {
        $this->page->setText($text);
    }

    public function formatPage() : void
    {
        $this->page->formatPage();
    }

    public function getPage() : HTMLPage
    {
        return $this->page;
    }
}