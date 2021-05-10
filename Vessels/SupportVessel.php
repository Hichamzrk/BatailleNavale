<?php

namespace App\Vessels;

use App\Vessels\AbstractVessel;

class SupportVessel extends AbstractVessel{
   
    protected $type = "Assistance";
    protected $vessel;
    protected $x;
    protected $y;
}