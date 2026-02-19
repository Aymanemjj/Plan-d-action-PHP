<?php



class VoitureElectrique extends Voiture
{

    private string $marque;
    private string $modele;
    private int $kilometrage;
    private int $autonomieKm;


    public function __construct(string $marque, string $modele, int $km, int $autonomieKm)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->kilometrage = $km;
        $this->autonomieKm = $autonomieKm;
    }

    public function decrire()
    {
        return "$this->marque $this->modele -- $this->kilometrage km | Electrique | Autonomie: $this->autonomieKm km";
    }
}
