<?php

namespace App\Vessels;

use App\Vessels\AbstractVessel;

class OffensiveVessel extends AbstractVessel{
    
    protected $type = "Offensive";
    protected $vessel;
    protected $x;
    protected $y;
}