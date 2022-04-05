<?php


class Car {

    private int $nbWheels = 4;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats = 4;
    private string $Energy;
    private int $EnergyLevel;

    public function __construct(string $color, int $nbSeats, string $Energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->$Energy;
    }

    public function forward(): string
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

    //  ...................................................
     public function getColor()
     {
         return $this->color;
     }
     public function setColor(string $color): void
    {
        $this->color = $color;
    }

    // ......................................................
    public function getnbSeats()
    {
        return $this->nbSeats;
    }
    public function setnbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }
     
// .............................................................
    public function getEnergy()
    {
        return $this->Energy;
    }
    public function setEnergy(int $Energy): void
    {
        $this->Energy = $Energy;
    }

// ..............................................................
    public function getEnergyLevel()
    {
        return $this->EnergyLevel;
    }
    public function setEnergyLevel()
    {
        $this->EnergyLevel = $EnergyLevel;
    }
}