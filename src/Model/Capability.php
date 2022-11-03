<?php

namespace App\Model;

abstract class Capability
{
    private string $name;

    public function __construct()
    {
        
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $msg = "Informations of a Capability :\n";
        $msg .= "Name : {$this->getName()}\n";

        return $msg;
    }
}