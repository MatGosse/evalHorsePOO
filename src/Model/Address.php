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

        // -------------------- getter & setter

        /**
         * Get the value of street
         * @return string
         */ 
        public function getStreet():string
        {
                return $this->street;
        }
        /**
         * Set the value of street
         * @param string $street
         * @return  self
         */ 
        private function setStreet(string $street):self
        {
                $this->street = $street;

                return $this;
        }
        /**
         * Get the value of city
         * @return string
         */ 
        public function getCity():string
        {
                return $this->city;
        }
        /**
         * Set the value of city
         * @param string $city
         * @return self
         */ 
        private function setCity(string $city):self
        {
                $this->city = $city;

                return $this;
        }
        /**
         * Get the value of code
         * @return int
         */ 
        public function getCode():int
        {
                return $this->code;
        }
        /**
         * Set the value of code
         * @param int $code
         * @return  self
         */ 
        private function setCode(int $code):self
        {
                $this->code = $code;

                return $this;
        }

        // -------------------- other functions

        public function __toString():string{
                return $this->getStreet() . ' ' . $this->getCity() . ' ' . $this->getCode();
        }
    }