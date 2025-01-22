<?php 

declare (strict_types = 1);

class Pont 
{
    private const UNITE = 'm²';
    private float $longueur;
    private float $largeur;

    public function getSurface():string
    {
        return($this->longueur * $this->largeur) . self::UNITE;
    }
    public static function validerTaille(float $taille): bool
    {
        if($taille <0){
            trigger_error(
                'La taille est trop courte. (min 0)',
                E_USER_ERROR
            );
        }
        return true;
    }

    public function setLongueur(float $longueur): void{
        self::validerTaille($longueur);
        $this->longueur = $longueur;
    }
    public function setLargeur(float $largeur): void{
        self::validerTaille($largeur);
        $this->largeur = $largeur;
    }

    public static int $nombrePietons = 0;

    public function nouveauPietons()
    {
        self::$nombrePietons++;
    }
}



$towerBridge = new Pont;
$towerBridge->nouveauPietons();
$towerBridge->setLongueur(20.0);
$towerBridge->setLargeur(20.0);
$manathanBridge = new Pont;
$manathanBridge->nouveauPietons();
echo $towerBridge->getSurface();
echo Pont::$nombrePietons;