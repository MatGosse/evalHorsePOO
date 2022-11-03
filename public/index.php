<?php

use App\Model\Sheitland;

require_once("../src/app.php");

$findus = new Sheitland("findus", 'White', 200);
$findus2 = new Sheitland("findus", 'qds', 200);


echo $findus->getId() . "\n";
echo $findus2->getId();

