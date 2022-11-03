<?php
    namespace App\Model;
    class Address
    {
        private string $street;
        private string $city;
        private int $code;

        public function __construct(string $street, string $city, int $code)
        {
            $this->setStreet($street)
                ->setCity($city)
                ->setCode($code);
        }

        /**
         * Get the value of street
         */ 
        public function getStreet():string
        {
                return $this->street;
        }

        /**
         * Set the value of street
         *
         * @return  self
         */ 
        public function setStreet($street):self
        {
                $this->street = $street;

                return $this;
        }

        /**
         * Get the value of city
         */ 
        public function getCity():string
        {
                return $this->city;
        }

        /**
         * Set the value of city
         *
         * @return  self
         */ 
        public function setCity($city):self
        {
                $this->city = $city;

                return $this;
        }

        /**
         * Get the value of code
         */ 
        public function getCode():int
        {
                return $this->code;
        }

        /**
         * Set the value of code
         *
         * @return  self
         */ 
        public function setCode($code):self
        {
                $this->code = $code;

                return $this;
        }
    }