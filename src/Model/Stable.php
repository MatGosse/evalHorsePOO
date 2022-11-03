<?php
    namespace App\Model;

    class Stable{
        private Manager $manager;
        private Address $address;

        public function __construct(Manager $manager, Address $address){
            $this->setManager($manager)
                ->setAddress($address);
                echo $this->__toString();
        }

        /**
         * Get the value of manager
         */ 
        public function getManager(): Manager
        {
                return $this->manager;
        }

        /**
         * Set the value of manager
         *
         * @return  self
         */ 
        public function setManager(Manager $manager)
        {
                $this->manager = $manager;

                return $this;
        }

        /**
         * Get the value of address
         */ 
        public function getAddress()
        {
                return $this->address;
        }

        /**
         * Set the value of address
         *
         * @return  self
         */ 
        public function setAddress(Address $address)
        {
                $this->address = $address;
                return $this;
        }

        public function __toString()
        {
                return 'A Stable whit manager ' . $this->getManager()->getName() . " was created \n";
        }
    }