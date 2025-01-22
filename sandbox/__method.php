<?php 
declare(strict_types=1);

class Pont 
{
    protected float $longueur;
    protected float $largeur;


    //mutateur
    // public function setLongueur(float $longueur): void
    // {
    //     $this->longueur = $longueur;
    // }

    // public function setLargeur(float $largeur): void
    // {
    //     $this->largeur = $largeur;
    // }

    //constructeur

    public function __construct(float $longueur, float $largeur){
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }
}

$towerBridge = new Pont (286, 44);

var_dump($towerBridge);
