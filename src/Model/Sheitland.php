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
    
    // -------------------- getter & setter

    /**
     * Get the value of id
     * @return string
     */ 
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Set the value of id
     * @return  self
     */ 
    private function setId():self 
    {   
        $id =  '0000-';
        // get the fist letter of the name
        $id .= substr($this->getName(),0,1);
        // get the first letter of the color
        $id .= '-' . substr($this->getColor(),0,1);
        // get the effectif
        $id .= '-' . $this->getEffectif();
        $this->id = $id;
        return $this;
    }
    
    // -------------------- other function
    
    /**
     * get all information of the equine
     * @return string
     */
    public function __toString(): string
    {
        return "An Sheitland name " . $this->getName() . " of color ". $this->getColor() ." and id " . $this->getId() ." was created \n"; 
    }
    /**
     * Say if the Sheitland can dothe competiton
     * @param string $competion
     * @return true
     */
    public function canDoTheCompetition(string $competion): bool
    {
        if(in_array($competion,self::COMPETITONAUTHORIZE)===false){
            return false;
        }
        return true;
    } 
}