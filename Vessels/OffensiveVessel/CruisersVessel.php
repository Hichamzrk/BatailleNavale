<?php

namespace App\Vessels\OffensiveVessel;

use App\Vessels\AbstractVessel;

class CruisersVessel extends AbstractVessel{
    
   const TYPE = "Offensive";
   const CANNONS = 6;
   protected $x;
   protected $y;
}