<?php

require_once 'Vehicle.php';

class Skateboard extends Vehicle{

    public function foot():string
    {
        $this->currentSpeed = 5;
        return "Go !";
    }
    
}