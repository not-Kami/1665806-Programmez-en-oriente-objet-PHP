<?php


declare(strict_types= 1);

$a = 15;
// class Pont{
//         public float $longueur = $a;
// }


// $pont = new Pont;
// $pont->longueur = 360.5;

// var_dump($pont);

// $pont->longueur = 0;
// var_dump($pont);






class pont{
    public float $longueur;
    public float $largeur;

    public function getSurface(): float{
        return $this->longueur *$this->largeur;
    }

}
$pont = new pont;
$pont->longueur = 20;
$pont->largeur = 5.5;



var_dump($pont->getSurface());

