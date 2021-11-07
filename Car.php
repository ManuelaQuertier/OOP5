<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{

    public const ALLOWED_ENERGIES =[
        'fuel',
        'electric'
    ];

    private string $energy;

    private Int $energyLevel;

    private bool $hasParkBrake;


    public function __construct(Int $energyLevel, bool $hasParkBrake)
    {
        $this-> energyLevel = $energyLevel;
        $this -> hasParkBrake =$hasParkBrake;
    }

    public function start():string
    {
        if ($this->energyLevel>0){
            
        
            if ($this->hasParkBrake === true){
            throw new Exception('Le frein à main est serré !<br><br>');
            }

            return '<br><br>Go!';
        }
    }

    public function switchOn(): bool
    {
        return true;
    }
    public function swithchOff(): bool
    {
        return false;
    }

    public function getHasParkBrake():bool
    {
        return $this->hasParkBrake;
    }
    public function setHasParkBrake($hasParkBrake):void
    {
        $this -> hasParkBrake = $hasParkBrake;
    }


    public function getEnergy(): string
    {
        return $this -> energy;
    }
    public function setEnergy($energy): Car
    {
        if (in_array($energy, self:: ALLOWED_ENERGIES)){
            $this -> energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this -> energyLevel;
    }
    public function setEnergyLevel($energyLevel): void
    {
        $this -> energyLevel = $energyLevel;
    }


    
}


