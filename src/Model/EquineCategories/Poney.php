<?php

namespace App\Model\EquineCategories;

use App\Model\Equine;
use App\Model\HumanCategories\Rider;

class Poney extends Equine
{
    public function __construct(string $id, string $color, int $water, string $category, Rider $rider)
    {
        parent::__construct($id, $color, $water, $category, $rider);
    }
}