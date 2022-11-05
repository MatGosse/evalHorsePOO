<?php

use App\Model\Raider;
use App\Model\Sheitland;
use App\Model\Address;
use App\Model\Event;
use App\Model\Manager;
use App\Model\Stable;

require_once("../src/app.php");
// ---------- Don"t forget to read the documentation in doc ---------- //
// creation of an address
$bobAddress = new Address("1 rue random","randomville",14000);
// creation Human
$bob = new Raider("bob", $bobAddress);
$boby = new Manager("boby", $bobAddress);
$stable = new Stable($boby, $bobAddress);
// creation of equine
$findus = new Sheitland("findus", 'White', 200, $bob);
// new event creation
$event = new Event([$findus],'zqsd','PoneyGames');

// ---- Errors cases
// $event = new Event([$findus, $bob],'zqsd','PoneyGames');
// $findus = new Sheitland("findus", 'red', 200, $bob);
// $stable = new Stable($bobAddress, $boby);