<?php

namespace App\Vessels\OffensiveVessel;

use App\Vessels\AbstractVessel;

class DestroyersVessel extends AbstractVessel{
    
   const TYPE = "Offensive";
   const CANNONS = 12;
   protected $x;
   protected $y;
}