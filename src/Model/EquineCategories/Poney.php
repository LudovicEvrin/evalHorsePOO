<?php

namespace App\Model\EquineCategories;

use App\Model\Equine;
use App\Model\HumanCategories\Rider;

class Poney extends Equine
{
    public function __construct(string $color, int $water, Rider $rider)
    {
        parent::__construct($color, $water, $rider);
        $this->setCategory("Poney");
        $this->setId("000-" . substr($this->getCategory(), -1) . "-" . substr($this->getColor(), -1) . "-");
    }
}