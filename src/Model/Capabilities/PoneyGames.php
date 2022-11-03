<?php

namespace App\Model\Capabilities;

use App\Model\Capability;

class PoneyGames extends Capability
{

    public function __construct()
    {
        $this->setName("PoneyGames");    
    }
}