<?php

namespace App\Http\Services\NavShow;

class NavShowProcessor {
    private NavShowType $navShowType;

    public function __construct(NavShowType $navShowType)
    {
        $this->navShowType = $navShowType;
    }

    public function processShow(){
        $this->navShowType->show();
    }
}
