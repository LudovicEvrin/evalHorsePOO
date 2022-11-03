<?php

namespace App\Model;

use App\Model\HumanCategories\Manager;

class Stable
{
    private string $name;
    private string $street;
    private string $postCode;
    private string $city;
    private Manager $manager;

    public function __construct(string $name, string $street, string $postCode, string $city, Manager $manager)
    {
        $this->setName($name)
            ->setStreet($street)
            ->setPostCode($postCode)
            ->setCity($city)
            ->setManager($manager);
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

    /**
     * Get the value of street
     * @return string
     */ 
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * Set the value of street
     * @param string $street
     * @return  self
     */ 
    public function setStreet(string $street): self
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get the value of postCode
     * @return string
     */ 
    public function getPostCode(): string
    {
        return $this->postCode;
    }

    /**
     * Set the value of postCode
     * @param string $postCode
     * @return  self
     */ 
    public function setPostCode(string $postCode): self
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * Get the value of city
     * @return string
     */ 
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Set the value of city
     * @param string $city
     * @return  self
     */ 
    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of manager
     * @return Manager
     */ 
    public function getManager(): Manager
    {
        return $this->manager;
    }

    /**
     * Set the value of manager
     * @param Manager $manager
     * @return  self
     */ 
    public function setManager($manager): self
    {
        $this->manager = $manager;

        return $this;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $msg = "Informations of a Stable :\n";
        $msg .= "Name : {$this->getName()}\n";
        $msg .= "Street : {$this->getStreet()}\n";
        $msg .= "Post Code : {$this->getPostCode()}\n";
        $msg .= "City : {$this->getCity()}\n";
        $msg .= "Manager : {$this->getManager()}\n";

        return $msg;
    }
}