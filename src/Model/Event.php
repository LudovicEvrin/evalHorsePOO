<?php

namespace App\Model;

abstract class Event
{
    private int $maxCommitments;
    private int $maxWater;
    private string $typeEvent;

    public function __construct(int $maxCommitments, int $maxWater, string $typeEvent)
    {
        $this->setMaxCommitments($maxCommitments)
            ->setMaxWater($maxWater)
            ->setTypeEvent($typeEvent);
    }

    /**
     * Get the value of maxCommitments
     * @return int
     */ 
    public function getMaxCommitments(): int
    {
        return $this->maxCommitments;
    }

    /**
     * Set the value of maxCommitments
     * @param int $maxCommitments
     * @return  self
     */ 
    public function setMaxCommitments(int $maxCommitments): self
    {
        $this->maxCommitments = $maxCommitments;

        return $this;
    }

    /**
     * Get the value of maxWater
     * @return int
     */ 
    public function getMaxWater(): int
    {
        return $this->maxWater;
    }

    /**
     * Set the value of maxWater
     * @param int $maxWater
     * @return  self
     */ 
    public function setMaxWater(int $maxWater): self
    {
        $this->maxWater = $maxWater;

        return $this;
    }

    /**
     * Get the value of typeEvent
     * @return string
     */ 
    public function getTypeEvent(): string
    {
        return $this->typeEvent;
    }

    /**
     * Set the value of typeEvent
     * @param string $typeEvent
     * @return  self
     */ 
    public function setTypeEvent($typeEvent): self
    {
        $this->typeEvent = $typeEvent;

        return $this;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $msg = "Informations of an Event :\n";
        $msg .= "Maximum number of commitments : {$this->getMaxCommitments()}\n";
        $msg .= "Maximum quantity of water : {$this->getMaxWater()}\n";
        $msg .= "Type of event : {$this->getTypeEvent()}\n";

        return $msg;
    }
}