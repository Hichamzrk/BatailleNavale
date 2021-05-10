<?php

namespace App\SpaceDefense;

    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    //On définit une constante contenant le dossier racine
    define('ROOT', dirname(__DIR__));

    //On importe les namespace nécessaires
    use App\Autoloader;
    use App\Vessels\OffensiveVessel;

    //On importe l'autoloader
    require ROOT . '/vendor/autoload.php';

    //On genere 50 Vaisseaux, 25 vaissaux support, 25 vaisseaux offensif
    $vesselGenerator = new VesselGenerator;
    $vesselSupport = array();
    $vesselOffensive = array();

    for ($i=0; $i<=25; $i++) { 
        $vessel = $vesselGenerator->generateOffensiveVessel();
        
        $vesselType = $vessel->getVesselType();
        $xPosition = $vessel->getXPosition();
        $yPosition = $vessel->getYPosition();
        $value = $xPosition + $yPosition;
        
        $vesselOffensive[] = [
            'type' => $vesselType,
            'x' => $xPosition,
            'y' => $yPosition,
            'value' => $value
        ];

        echo 'Support Vessel Type -> '.$vesselType.'('.$xPosition.', '.$yPosition.')'."\n";
    }
    
    echo "------------------------------ \n";

    for ($i=0; $i<=25; $i++) { 
        $vessel = $vesselGenerator->generateSupportVessel();
        
        $vesselType = $vessel->getVesselType();
        $xPosition = $vessel->getXPosition();
        $yPosition = $vessel->getYPosition();
        $value = $xPosition + $yPosition;

        $vesselSupport[] = [
            'type' => $vesselType,
            'x' => $xPosition,
            'y' => $yPosition,
            'value' => $value
        ];

        echo 'Offensive Vessel Type -> '.$vesselType.'('.$xPosition.', '.$yPosition.')'."\n";
    }

    foreach ($vesselSupport as $key => $vesselSupp) {
        $vesselSupportValue = $vesselSupp['value'];

        foreach ($vesselOffensive as $key => $vesselOff) {
            if (($vesselOff['value'] - $vesselSupportValue) == 4 OR ($vesselOff['value'] - $vesselSupportValue) == -4) {
                
                var_dump($vesselSupp);
                var_dump($vesselOff);
            }
        }
    }