<?php

    require 'CompteBancaire.php';
    require 'Voiture.php';
    require 'VoitureElectrique.php';
    require 'Garage.php';
/* $compte = new CompteBancaire("Alice", 500.0);
echo $compte->afficherSolde(); // "Compte de Alice : 500€"
$compte->deposer(200.0);
echo $compte->getSolde(); // 700.0
$resultat = $compte->retirer(1000.0);
var_dump($resultat); // bool(false) — solde insuffisant */


$v1 = new Voiture("Toyota", "Yaris", 15000);
/* echo $v1->decrire(); // "Toyota Yaris — 15000 km"
 */$v2 = new Voiture("Tesla", "Model 3", 5000);
/* echo $v2->decrire(); // "Tesla Model 3 — 5000 km | Électrique | Autonomie: 400km" */
$v3 = new Voiture('test', 'test', 4644);
$v4 = new Voiture('test2', 'test2', 17898);

$garage = Garage::garage();
$garage2 = Garage::garage();
$garage3 = Garage::garage();


$garage->addCar($v1);
$garage->addCar($v2);

$garage->listCars();

$garage2->addCar($v3);

$garage3->addCar($v4);

$garage->removeCar($v2);


$garage->listCars();
$garage2->listCars();
$garage3->listCars();
$garage4 = Garage::garage();
echo Garage::getNbGarages();
echo PHP_EOL;