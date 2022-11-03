<?php
    namespace App\Model;
    use App\Model\Sheitland;
    use Error;

    class Event
    {
        private array $entrants =[];
        private string $name;
        // oui j'aurais pu faire une class type mais pas le temps
        private string $type;

        public function __construct(array $entrants, string $name, string $type)
        {

                $this->setName($name)->setType($type)->setEntrants($entrants);
                echo $this->__toString();
        }

        /**
         * Get the value of entrants
         */ 
        public function getEntrants():array
        {
                return $this->entrants;
        }

        /**
         * Set the value of entrants
         * @param $entrant <Equine>[]
         * @return  self
         */ 
        public function setEntrants(array $entrants):self
        {       
                foreach($entrants as $entrant){
                        if(get_class($entrant) !== "Sheitland"){
                                //throw new Error("");
                        }
                        // check if horse can do competition
                        if($entrant->canDoTheCompetition($this->getType())){
                                $this->entrants[] = $entrant;    
                        }   
                }

                return $this;
        }

        /**
         * Get the value of name
         */ 
        public function getName():string
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName(string $name):self
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of type
         */ 
        public function getType()
        {
                return $this->type;
        }

        /**
         * Set the value of type
         *
         * @return  self
         */ 
        public function setType(string $type):self
        {
                $this->type = $type;
                return $this;
        }

        public function __toString(): string
        {
            return "Event " . $this->getName() . " of type ". $this->getType() . " was crated whith " . sizeof($this->getEntrants()) . " entrants \n";
        }
    }