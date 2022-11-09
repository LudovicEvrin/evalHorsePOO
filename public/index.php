<?php

require_once __DIR__ . "/../src/app.php";

use App\Model\HumanCategories\Manager;
use App\Model\HumanCategories\Rider;
use App\Model\EquineCategories\Horse;
use App\Model\EquineCategories\Poney;
use App\Model\EquineCategories\Sheitland;
use App\Model\Capabilities\Cross;
use App\Model\Capabilities\Jump;
use App\Model\Capabilities\Training;
use App\Model\Capabilities\PoneyGames;
use App\Model\Stable;

$man1 = new Manager("Henry Cross","13 street of The Beatles","54000","London","Manager");
$rid1 = new Rider("Bob Ross","1 street Blue","13400","Rome","Rider");

echo "Creation of a Manager and a Rider ->\n";
echo $man1;
echo $rid1;

$che1 = new Horse("Bai",25, $rid1);
$pon1 = new Poney("Alzan",20, $rid1);
$she1 = new Sheitland("Grey",10, $rid1);

echo "Creation of a horse, poney and sheitland ->\n";
echo $che1;
echo $pon1;
echo $she1;

$eve1 = new Cross();
$eve2 = new Jump();
$eve3 = new Training();
$eve4 = new PoneyGames();

echo "Creation of 4 events ->\n";
echo $eve1;
echo $eve2;
echo $eve3;
echo $eve4;

$sta1 = new Stable("Stable of Norway","45 street of Cold","54000","Oslo",$man1);

echo "Creation of a stable ->\n";
echo $sta1;