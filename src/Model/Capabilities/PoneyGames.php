<?php

namespace App\Model\Capabilities;

use App\Model\Event;

class PoneyGames extends Event
{

    public function __construct(int $maxCommitments, int $maxWater, string $typeEvent)
    {
        parent::__construct($maxCommitments, $maxWater, $typeEvent);
    }
}