<?php

namespace App\Model\Capabilities;

use App\Model\Capability;

class Training extends Capability
{

    public function __construct()
    {
        $this->setName("Training");
    }
}