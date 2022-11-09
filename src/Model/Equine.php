<?php

namespace App\Model;

use App\Model\Animal;
use App\Model\HumanCategories\Rider;

abstract class Equine extends Animal
{
    private string $id;
    private string $color;
    private int $water;
    private string $category;
    private Rider $Rider;
    private static $count=0;

    public function __construct(string $color, int $water, Rider $rider)
    {
        $this->setColor($color)
            ->setWater($water)
            ->setRider($rider);
    }

    /**
     * Get the value of id
     * @return string
     */ 
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set the value of id
     * @param string $id
     * @return  self
     */ 
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of color
     * @return string
     */ 
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Set the value of color
     * @param string $color
     * @return  self
     */ 
    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of water
     * @return int
     */ 
    public function getWater(): int
    {
        return $this->water;
    }

    /**
     * Set the value of water
     * @param int $water
     * @return  self
     */ 
    public function setWater(int $water): self
    {
        $this->water = $water;

        return $this;
    }

    /**
     * Get the value of Rider
     * @return Rider
     */ 
    public function getRider(): Rider
    {
        return $this->Rider;
    }

    /**
     * Set the value of Rider
     * @param Rider $rider
     * @return  self
     */ 
    public function setRider(Rider $Rider): self
    {
        $this->Rider = $Rider;

        return $this;
    }

    /**
     * Get the value of category
     * @return string
     */ 
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * Set the value of category
     * @param string $category
     * @return  self
     */ 
    public function setCategory($category): self
    {
        $this->category = $category;

        return $this;
    }

    public function count() {
        return ++$this::$count;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $msg = "Informations of an Equine :\n";
        $msg .= "ID : {$this->getId()}"."{$this->count()}\n";
        $msg .= "Color : {$this->getColor()}\n";
        $msg .= "Water qunatity needed : {$this->getWater()}\n";
        $msg .= "Category : {$this->getCategory()}\n";
        $msg .= "Rider : {$this->getRider()}\n";

        return $msg;
    }

}