<?php

namespace App\SpaceDefense;

use App\Vessels\SupportVessel;
use App\Vessels\OffensiveVessel;

class VesselGenerator
{
    function generateOffensiveVessel(){
        $vessel = new OffensiveVessel;
        $vessel->generateVesselType();

        return $vessel;
    }

    function generateSupportVessel(){
        $vessel = new SupportVessel;
        $vessel->generateVesselType();

        return $vessel;
    }
}
