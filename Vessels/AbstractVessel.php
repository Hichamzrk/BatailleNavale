<?php

namespace  App\Vessels;

class AbstractVessel
{
    protected $support = ['Cargo', 'Mechanical assistance', 'Refueling'];
    protected $offensive = ['Battleships', 'Cruisers', 'Destroyers'];

    function __construct(){
        
        $this->generateRandomPosition();
    }

    function generateRandomPosition(){
        
        $this->x = rand(0, 100);
        $this->y = rand(0, 100);
    }

    function generateVesselType(){
        if ($this->type == 'Offensive') {

            $this->vessel = $this->offensive[rand(0, 2)];
        }
        else {
            
            $this->vessel = $this->support[rand(0, 2)];
        }
    }

    function setPosition($x, $y){
        $this->x = $x;
        $this->y = $y;
    }

    function getXPosition(){
        return $this->x;
    }

    function getYPosition(){
        return $this->y;
    }
    
    function getVesselType(){
        return $this->vessel;
    }

    function getType(){
        return $this->type;
    }
}
