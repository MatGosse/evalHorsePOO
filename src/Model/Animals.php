<?php
    namespace App\Model;

    abstract class Animals
    {
        private string $name;

        public function __construct(string $name)
        {
            $this->setName($name);
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

    }