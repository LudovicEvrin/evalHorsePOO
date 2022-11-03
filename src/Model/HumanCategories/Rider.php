<?php

namespace App\Model\HumanCategories;

use App\Model\Human;

class Rider extends Human
{
    private string $gameType;

    public function __construct(string $name, string $street, string $postCode, string $city, string $category)
    {
        parent::__construct($name, $street, $postCode, $city, $category);
    }

    /**
     * Get the value of gameType
     * @return string
     */ 
    public function getGameType(): string
    {
        return $this->gameType;
    }

    /**
     * Set the value of gameType
     * @param string $gameType
     * @return  self
     */ 
    public function setGameType(string $gameType): self
    {
        $this->gameType = $gameType;

        return $this;
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