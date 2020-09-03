<?php

namespace Src\Creational\FactoryMethod\Example2;

class SamsPHPBook extends AbstractPHPBook
{
    private string $author;
    private string $title;

    public function __construct() {
        //alternate randomly between 2 books
        mt_srand((double)microtime()*10000000);
        $rand_num = mt_rand(0,1);

        if (1 > $rand_num) {
            $this->author = 'George Schlossnagle';
            $this->title  = 'Advanced PHP Programming';
        } else {
            $this->author = 'Christian Wenz';
            $this->title  = 'PHP Phrasebook';
        }
    }

    public function getAuthor() : string {return $this->author;}
    public function getTitle() : string {return $this->title;}
}