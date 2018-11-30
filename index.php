<?php

use InvoiceApp\Entity\Resistant;
use InvoiceApp\Entity\Zombie;
use InvoiceApp\Entity\Combat;
use InvoiceApp\ValueObject\Weapons;

require __DIR__.'/vendor/autoload.php';

$resistant = new Resistant(rand(1, 250), new Weapons("Magnum",rand(3, 50)));
$zombie = new Zombie(rand(1, 250), rand(1, 20));
$combat = new Combat($resistant, $zombie);

echo "Joueur :".$resistant->toString()."<br>";
echo "Zombie :".$zombie->toString();

$combat->game($resistant, $zombie);