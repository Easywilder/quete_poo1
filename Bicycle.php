<?php
// Bicycle.php

class Bicycle
{

    /*ceci sont mes attributs ou propritées*/

    private $color;

    public $currentSpeed;

    private $nbSeats = 1;

    private $nbWheels = 2;

    /*ceci sont mes méthodes*/


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
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;

    }

    public function dump()
    {
        var_dump($this);

    }

    public function getColor(): string
    {
        return $this->color;
    }


    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }
    public function setnbseat($nbSeats){

        $this->nbSeats = $nbSeats;
    }

    public function getnbSeat(){

        return $this-> nbSeats;
    }
}
 /*ceci est la fin de la rédaction de mes méthodes*/



