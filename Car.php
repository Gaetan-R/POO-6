<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';


class Car extends Vehicle implements LightableInterface
{
    public function switchOn(): bool
    {
    return true;
    }
    public function switchOff(): bool
    {
    return false;
    }

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @var int
     */
    private $energyLevel;

    private $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, int $nbWheels ,string $energy)
    {
        parent::__construct($color, $nbSeats, $nbWheels);
        $this->setEnergy($energy);


    }
    public function start()
    {
        try {
            if ($this->hasParkBrake === true) {
                throw new Exception("the handbrake is on Homer !!!");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        } finally {
            echo "Ma voiture roule comme un gros donut";
        }
    }

    public function setParkBrake($hasParkBrake): bool
    {
        return $this->hasParkBrake = $hasParkBrake;
    }




    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }







}