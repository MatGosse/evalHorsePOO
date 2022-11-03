<?php
    
namespace App\Model;
    
abstract class Equine extends Animals
{
    private const ACCEPTEDCOLOR = ['Alzan', 'Bai', 'Pie', 'Grey', 'White'];
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
     */ 
    public function getColor():string
    {
            return $this->color;
    }
    /**
     * Set the value of color
     * @param string $color
     * 
     * @return  self
     */ 
    public function setColor(string $color):self
    {
        if(in_array($color,self::ACCEPTEDCOLOR)===false){
            // throw new Exception("Invalid color");
            return $this;
        }   
        $this->color = $color;
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
     *
     * @return  self
     */ 
    public function setWater(int $water):self
    {
        $this->water = $water;

        return $this;
    }
        

    /**
     * Get the value of effectif
     */ 
    public function getEffectif():int
    {
        return self::$effectif;
    }

    /**
     * Get the value of raider
     */ 
    public function getRaider():Raider
    {
        return $this->raider;
    }

    /**
     * Set the value of raider
     *
     * @return  self
     */ 
    public function setRaider(Raider $raider):self
    {
        $this->raider = $raider;

        return $this;
    }
}