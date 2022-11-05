<?php
    namespace App\Model;

    class Stable{
        private Manager $manager;
        private Address $address;

        public function __construct(Manager $manager, Address $address){
            $this->setAddress($address)->setManager($manager);
                echo $this->__toString();
        }

        // -------------------- getter & setter

        /**
         * Get the value of manager
         * @return Manager
         */ 
        public function getManager(): Manager
        {
                return $this->manager;
        }
        /**
         * Set the value of manager
         * @param Manager
         * @return  self
         */ 
        private function setManager(Manager $manager):self
        {
                $this->manager = $manager;
                $manager->addStable($this);
                return $this;
        }

        /**
         * Get the value of address
         * @return Address
         */ 
        public function getAddress():Address
        {
                return $this->address;
        }
        /**
         * Set the value of address
         * @param Address
         * @return self
         */ 
        private function setAddress(Address $address):self
        {
                $this->address = $address;
                return $this;
        }
        
        // -------------------- other function

        /**
         * give all information of the stable
         * @return string
         */
        public function __toString(): string
        {
                return 'A Stable whit manager ' . $this->getManager()->getName() . " was created \n";
        }
    }