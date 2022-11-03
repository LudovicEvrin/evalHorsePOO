<?php

require_once __DIR__ . "/../src/app.php";

use App\Model\Manager;
use App\Model\Rider;
use App\Model\Horse;
use App\Model\Poney;
use App\Model\Sheitland;


$man1 = new Manager("Henry Cross","13 street of The Beatles","54000","London","Manager");
$rid1 = new Rider("Bob Ross","1 street Blue","13400","Rome","Rider");

/* echo $man1;
echo $rid1; */

$che1 = new Horse("IDA","Bai",25,"Horse",$rid1);
$pon1 = new Poney("ODA","Alzan",20,"Poney",$rid1);
$she1 = new Sheitland("FBN","Grey",10,"Sheitland",$rid1);

echo $che1;
echo $pon1;
echo $she1;