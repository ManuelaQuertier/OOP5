<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
        $this->currentVehicles = [];
    }

    public function addVehicle(Vehicle $vehicle):void {
        if (($vehicle instanceof Bicycle)||($vehicle instanceof Skateboard)) 
        {
            $this->currentVehicles[]= $vehicle;
        }
    }
}