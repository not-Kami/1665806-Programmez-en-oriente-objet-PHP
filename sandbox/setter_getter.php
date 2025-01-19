<?php

declare(strict_types=1);

class Pont
{
   private string $unite = 'm²';
  
   private float $longueur;
   private float $largeur;
  
   public function setLongueur(float $longueur): void
   {
       if ($longueur < 0) {
           trigger_error(
               'La longueur est trop courte. (min 1)',
               E_USER_ERROR
           );
       }
      
       $this->longueur = $longueur;
   }
   public function setLargeur(float $largeur) : void
   {
    if ($largeur <0){
        trigger_error (
            'La largeur est trop courte.(min1)',
            E_USER_ERROR
        );
    }
   }

   Public function getLongueur(): float{
    if ($this->longueur!=null){
        return $this->longueur;
    }
    trigger_error (
        "La longueur n'a pas été initialisée.(min1)",
        E_USER_ERROR
    );
   }
   Public function getLargeur(): float{
    if ($this->largeur!=null){
        return $this->largeur;
    }
    trigger_error (
        "La largeur n'a pas été initialisée.(min1)",
        E_USER_ERROR
    );
   }
}

$towerBridge = new Pont;
$towerBridge->setLongueur(286.0);
$towerBridge->setLongueur(-286.0);