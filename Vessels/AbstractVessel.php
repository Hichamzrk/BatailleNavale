<?php

namespace  App\Vessels;

class AbstractVessel
{
    function generateRandomPosition(){
        
        $this->x = rand(0, 100);
        $this->y = rand(0, 100);
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
}
