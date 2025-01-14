<?php
    
namespace App\Model;

use Error;

abstract class Equine extends Animals
{
    private const ACCEPTEDCOLOR = ['alzan', 'bai', 'pie', 'grey', 'white'];
    private static $effectif = 0;

    private string $color;
    private int $water;
    private Raider $raider;

    public function __construct(string $name, string $color, int $water, Raider $raider)
    {
        parent::__construct($name);
        $this->setColor($color)
            ->setWater($water)
            ->setRaider($raider);
        self::$effectif++;
    }


    //----------------------------------------getter setter
    
    /**
     * Get the value of color
     * @return string
     */ 
    public function getColor():string
    {
            return $this->color;
    }
    /**
     * Set the value of color
     * @param string $color
     * @return  self
     */ 
    private function setColor(string $color):self
    {
        $color = strtolower($color);
        if(in_array($color,self::ACCEPTEDCOLOR)===false){
            throw new Error("color invalid use 'Alzan', 'Bai', 'Pie', 'Grey', 'White'");
        }else{
            $this->color = $color;
        }
        return $this;
    }
    
    /**
     * Get the value of water
     */ 
    public function getWater(): int
    {
        return $this->water;
    }
    /**
     * Set the value of water
     * @param int $water
     * @return self
     */ 
    private function setWater(int $water):self
    {
        $this->water = $water;

        return $this;
    }
    /**
     * Get the value of effectif
     * @return int
     */ 
    public function getEffectif():int
    {
        return self::$effectif;
    }
    /**
     * Get the value of raider
     * @return Raider
     */ 
    public function getRaider():Raider
    {
        return $this->raider;
    }
    /**
     * Set the value of raider
     * @param Raider $raider
     * @return  self
     */ 
    public function setRaider(Raider $raider):self
    {
        $this->raider = $raider;
        return $this;
    }
}