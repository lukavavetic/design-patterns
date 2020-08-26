<?php

namespace Src\Creational\Builder\HTMLPage;

class HTMLPage {
    private string $page;
    private string $title;
    private string $heading;
    private string $text;

    public function showPage() : string
    {
        return $this->page;
    }

    public function setTitle(string $title) : void
    {
        $this->title = $title;
    }

    public function setHeading($heading) : void
    {
        $this->heading = $heading;
    }

    public function setText($text) : void
    {
        $this->text = $text;
    }

    public function formatPage() : void
    {
        $this->page  = '<html>';
        $this->page .= '<head><title>'.$this->title.'</title></head>';
        $this->page .= '<body>';
        $this->page .= '<h1>'.$this->heading.'</h1>';
        $this->page .= $this->text;
        $this->page .= '</body>';
        $this->page .= '</html>';
    }
}