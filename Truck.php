<?php

require_once 'Vehicle.php';

class Truck extends Vehicle{

    public const ALLOWED_ENERGIES =[
        'fuel',
        'electric'
    ];

    private int $capacity;

    private int $stock;

    private string $energy;


    public function __construct(string $color, int $ndSeats,int $capacity, string $energy)
    {
        parent::__construct($color, $ndSeats);
        $this -> capacity = $capacity;
        $this -> stock = $stock = 0;
    }

    public function getEnergy(): string
    {
        return $this -> energy;
    }
    public function setEnergy($energy): Truck
    {
        if (in_array($energy, self:: ALLOWED_ENERGIES)){
            $this -> energy = $energy;
        }
        return $this;
    }

    public function getCapacity(): int
    {
        return $this-> capacity;
    }
    public function setCapacity($capacity): void
    {
        $this -> capacity = $capacity;
    }

    public function getStock(): int
    {
        return $this-> stock;
    }
    public function setStock($stock): void
    {
        $this -> stock = $stock;
    }

    public function isFull(): string
    {
        
        if ($this->stock < $this->capacity){
           return 'in filling...';
        }else return 'full!';
    }

}