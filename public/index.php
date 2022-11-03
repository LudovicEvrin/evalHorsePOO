<?php

require_once __DIR__ . "/../src/app.php";

use App\Model\Manager;
use App\Model\Rider;

$man1 = new Manager("Henry Cross","13 street of The Beatles","54000","London","Manager");
$rid1 = new Rider("Bob Ross","1 street Blue","13400","Rome","Rider");

echo $man1;
echo $rid1;