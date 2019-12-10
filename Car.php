<?php

class Car {

    private $nbWheels;
    private $currentSpeed;
    private $color;
    private $nbSeats;
    private $energy;
    private $energyLevel;

    public function __construct($color,$nbSeats, $energy, $energyLevel="",$nbWheels=4,$currentSpeed=0)
    {
        $this->nbWheels= $nbWheels;
        $this->currentSpeed= $currentSpeed;
        $this->color=$color;
        $this->nbSeats=$nbSeats;
        $this->energy=$energy;
        $this->energyLevel=$energyLevel;
    }

    public function forward(){
        $this->currentSpeed++;
    }

    public function brake(){
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start(){
        $this->currentSpeed++;
    }

    public function getNbWheels(){
        return $this->nbWheels;
    }

    public function getCurrentSpeed(){
        return $this->currentSpeed;
    }
    public function getColor(){
        return $this->color;
    }
    public function getNbSeats(){
        return $this->nbSeats;
    }

    public function getEnergy(){
        return $this->energy;
    }
    public function getEnergyLevel(){
        return $this->energyLevel;
    }

}


$c = new Car("red",4,3);
