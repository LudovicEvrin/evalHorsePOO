<?php

namespace App\Model;

use App\Model\Equine;

class Sheitland extends Equine
{
    public function __construct(string $id, string $color, int $water, string $category, Rider $rider)
    {
        parent::__construct($id, $color, $water, $category, $rider);
    }
}