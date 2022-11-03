<?php

namespace App\Model\Capabilities;

use App\Model\Capability;

class Cross extends Capability
{

    public function __construct()
    {
        $this->setName("Cross");
    }
}