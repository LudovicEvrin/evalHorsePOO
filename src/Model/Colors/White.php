<?php

namespace App\Model\Colors;

use App\Model\Color;

class White extends Color
{
    public function __construct()
    {
        $this->setName("White");
    }
}