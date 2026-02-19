<?php

class Voiture
{

    private string $marque;
    private string $modele;
    private int $kilometrage;

    public function __construct(string $marque, string $modele, int $km)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->kilometrage = $km;
    }

    public function decrire(){
        return "$this->marque $this->modele -- $this->kilometrage km";
    }
}
