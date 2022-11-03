<?php
    namespace App\Model;
    abstract class Human{

        private string $name;
        private Address $address;

        public function __construct(string $name, Address $address)
        {
            $this->setName($name)
                ->setAddress($address);
                echo $this->__toString();
        }

        /**
         * Get the value of name
         */ 
        public function getName(): string
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName(string $name): self
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of address
         */ 
        public function getAddress(): Address
        {
                return $this->address;
        }

        /**
         * Set the value of address
         *
         * @return  self
         */ 
        public function setAddress(Address $address): self
        {
                $this->address = $address;

                return $this;
        }

        public function __toString(): string
        {
            return "An human " . $this->getName() . " was added \n";
        }
    } 