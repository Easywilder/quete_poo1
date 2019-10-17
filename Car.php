<?php

class Car
{
    /*ceci sont mes attributs ou propritées*/

    private $nbWheels = 2;

    private $currentSpeed = 15;

    private $color = 'red';

    private $nbSeats = 1;

    private $energy = 'gas';

    private $energyLevel = 50;


    /*ceci sont mes méthodes*/

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }
    public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "slow down !!!";
        }
        $sentence .= "I'm stucked !";
        return $sentence;

    }
    public function start(): string
    {
        $sentence = "";
        if ($this->currentSpeed === 0) {
            $sentence .= "start !!!";
        }
        $sentence .= "I have to move";
        return $sentence;

    }
    public function getNbWheels()
    {
        return $getNbWheels;
    }
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }
    public function getColor(): string
    {
        return $this->color;
    }
    public function getNbSeat()
    {
        return $this->nbSeats;
    }
    public function getEnergy()
    {
        return $this->energy;
    }
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color)
    {
        $this->color = $color;
    }

    /**
     * @param int $nbSeats
     */
    public function setNbSeats(int $nbSeats)
    {
        $this->nbSeats = $nbSeats;
    }

    /**
     * @param mixed $currentSpeed
     */
    public function setCurrentSpeed($currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
    }



}
/*ceci est la fin de la rédaction de mes méthodes*/


