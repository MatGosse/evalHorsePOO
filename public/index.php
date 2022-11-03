<?php

use App\Model\Raider;
use App\Model\Sheitland;
use App\Model\Address;

require_once("../src/app.php");



$bobAddress = new Address("1 rue random","randomville",14000);
$bob = new Raider("bob", $bobAddress);

// $findus = new Sheitland("findus", 'White', 200);


// echo $findus->getId() . "\n";
// echo $findus2->getId();