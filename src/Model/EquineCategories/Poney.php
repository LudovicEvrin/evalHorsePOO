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
        $this->setId("000-" . $this->getCategory()[0] . "-" . $this->getColor()[0] . "-");
    }
}