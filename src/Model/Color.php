<?php

namespace App\Model;

abstract class Color
{
    private string $name;

    public function __construct()
    {
        
    }

    /**
     * Get the value of name
     * @return string
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     * @param string $name
     * @return  self
     */ 
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}