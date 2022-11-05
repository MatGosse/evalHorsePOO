<?php

namespace App\Model;

interface EquineType{
    public function canDoTheCompetition(string $competioon):bool;
    public function getId():string;
}