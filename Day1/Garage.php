<?php


class Garage
{
    private static $garage = null;
    private static int $nbGarages = 0;
    private array $voitures = [];

    public function __construct() {
        self::$nbGarages ++;
    }

    public static function garage()
    {
        if (self::$garage === null) {
            self::$garage = new Garage();
        }

        return self::$garage;
    }

    public function addCar(Voiture $car)
    {
        array_push($this->voitures, $car);
    }

    public function removeCar(Voiture $car)
    {
        $position = array_search($car, $this->voitures);
        array_splice($this->voitures, $position, $position);
    }

    public function listCars()
    {
        echo ("--------");
        foreach ($this->voitures as $car) {
            echo ($car->decrire());
        }
        echo ("--------");

        echo PHP_EOL;
    }

    public static function getNbGarages()
    {
        return self::$nbGarages;
    }
}
