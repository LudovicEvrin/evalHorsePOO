<?php

namespace App\Model\HumanCategories;

use App\Model\Human;

class Rider extends Human
{

    public function __construct(string $name, string $street, string $postCode, string $city, string $category)
    {
        parent::__construct($name, $street, $postCode, $city, $category);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $msg = parent::__toString();

        return $msg;
    }
}