<?php
    namespace App\Model;

    class Event
    {
        private array $entrants =[];
        private string $name;
        // oui j'aurais pu faire une class type mais pas le temps
        private string $type;

        public function __construct(array $entrants, string $name, string $type)
        {
            $this->setName($name)
                ->setType($type)
                ->setEntrants($entrants);
                echo $this->__toString();
        }

        /**
         * Get the value of entrants
         */ 
        public function getEntrants()
        {
                return $this->entrants;
        }

        /**
         * Set the value of entrants
         * @param $entrant <Equine>[]
         * @return  self
         */ 
        public function setEntrants(array $entrants)
        {   
                foreach($entrants as $entrants){
                    // check if horse can do competition
                    if($entrants->canDoTheCompetition($this->getType())){
                        $this->entrants[] = $entrants;    
                    }
                }

                return $this;
        }

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName(string $name)
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
        public function setType(string $type)
        {
                $this->type = $type;

                return $this;
        }

        public function __toString(): string
        {
            return "Event " . $this->getName() . " of type ". $this->getType() . " was crated whith " . sizeof($this->getEntrants()) . " entrants \n";
        }
    }