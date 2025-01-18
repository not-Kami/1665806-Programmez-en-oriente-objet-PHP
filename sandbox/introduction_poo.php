<?php

$name = 'Paul';

class Salut
{
public function __construct(string $name){
    $this->name=$name;
}

public function Hello(){
    echo 'hello '.$this->name;
    }    
}

$welcome = new Salut('marc');
$welcome->Hello();


$date = new DateTime();

echo $date->format('Y-m-d H:i:s');

echo $name;

