<?php
    namespace App\Model;
    use App\Model\Equine;
    use Error;

    class Event
    {
        /**
         * @param array<Equine>
         */
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
         * 
         * @return self
         */ 
        public function getEntrants():array
        {
                return $this->entrants;
        }

        /**
         * Set the value of entrants
         * 
         * @param array<Equine> $entrant
         * 
         * @return  self
         */ 
        private function setEntrants(array $entrants):self
        {       
                foreach($entrants as $entrant){
                        if($entrant instanceof Equine===false){
                                throw new Error("One entrant is not an Equine");
                        }
                        // check if horse can do competition
                        if($entrant->canDoTheCompetition($this->getType())){
                                $this->entrants[] = $entrant;    
                        }else{
                                throw new Error("One entrant can't do the event");
                        }   
                }
                return $this;
        }

        /**
         * Get the value of name
         * 
         * @return  self
         */ 
        public function getName():string
        {
                return $this->name;
        }

        /**
         * Set the value of name
         * 
         * @param string $name
         *
         * @return  self
         */ 
        private function setName(string $name):self
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of type
         * 
         * @return  self
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
        private function setType(string $type):self
        {
                $this->type = $type;
                return $this;
        }

        public function __toString(): string
        {
            return "Event " . $this->getName() . " of type ". $this->getType() . " was crated whith " . sizeof($this->getEntrants()) . " entrants \n";
        }

        /**
         * @param Equine $equine 
         * 
         * @return  self
         */
        public function addEntrant(Equine $equine):self
        {
                $this->entrants[] = $equine;
                return $this;
        }
    }