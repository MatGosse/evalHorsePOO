<?php

    class Event
    {
        private array $entrants;
        private string $name;
        // oui j'aurais pu faire une class type mais pas le temps
        private string $type;

        public function __construct(array $entrants, string $name, string $type)
        {
            $this->setName($name)
                ->setEntrants($entrants)
                ->setType($type);
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
         *
         * @return  self
         */ 
        public function setEntrants($entrants)
        {   
                foreach($entrants as $entrants){
                    // check if horse can do competition
                    if($entrants->canDoTheCompetition()){
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
        public function setName($name)
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
        public function setType($type)
        {
                $this->type = $type;

                return $this;
        }
    }