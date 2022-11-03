<?php

namespace App\Model\Capabilities;

use App\Model\Capability;

class Jump extends Capability
{

    public function __construct()
    {
        $this->setName("Jump");
    }
}