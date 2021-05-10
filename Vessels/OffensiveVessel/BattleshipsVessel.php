<?php

namespace App\Vessels\OffensiveVessel;

use App\Vessels\AbstractVessel;

class BattleshipsVessel extends AbstractVessel{
    
   const TYPE = "Offensive";
   const CANNONS = 24;
   protected $x;
   protected $y;
}