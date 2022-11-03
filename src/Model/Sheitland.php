<?php

namespace App\Model;

class Sheitland extends Equine implements EquineType{

    private const COMPETITONAUTHORIZE = ['Dressage', 'PoneyGames'];
    private string $id;

    public function __construct(string $name, string $color, int $water, Raider $raider)
    {
        parent::__construct($name, $color, $water, $raider);
        $this->setId();
        echo $this->__toString();
    }

    public function canDoTheCompetition(string $competioon): bool
    {
        if(in_array($competioon,self::COMPETITONAUTHORIZE)===false){
            return false;
        }
        return true;
    }
    

    /**
     * Get the value of id
     */ 
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId():self 
    {   
        $id =  '0000-' . substr($this->getName(),0,1) . '-' . substr($this->getColor(),0,1) . "-" . $this->getEffectif();
        $this->id = $id;
        return $this;
    }

    public function __toString(): string
    {
        return "An Sheitland name " . $this->getName() . " of color ". $this->getColor() ." and id " . $this->getId() ." was created \n"; 
    } 
}