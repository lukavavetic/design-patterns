<?php

namespace Src\Structural\Bridge\Example2;

class Client
{
    public function run()
    {
        $times = [];
        $times[0] = new Time(14, 30);
        $times[1] = new CivilianTime(14, 30, "PM");
        $times[2]= new ZuluTimeImp(14, 30, "Central Standard Time");

        foreach ($times as $time)
        {
            $time->tell();
        }
    }
}