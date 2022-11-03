<?php

use App\Model\Raider;
use App\Model\Sheitland;
use App\Model\Address;
use App\Model\Event;
use App\Model\Manager;
use App\Model\Stable;

require_once("../src/app.php");



$bobAddress = new Address("1 rue random","randomville",14000);
$bob = new Raider("bob", $bobAddress);
$boby = new Manager("boby", $bobAddress);

$stable = new Stable($boby, $bobAddress);

$findus = new Sheitland("findus", 'White', 200, $bob);

$event = new Event([$findus],'zqsd','PoneyGames');


// echo $findus->getId() . "\n";
// echo $findus2->getId();