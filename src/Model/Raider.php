<?php
    namespace App\Model;
    class Raider extends Human
    {
        private Equine $equine;
        public function __construct($name, $address)
        {
            parent::__construct($name,$address);
            $this->__toString();
        }

        // -------------------- other function

        /**
         * Set a Stable to the manager
         * @param Equine
         * @return self
         */
        public function addEquine(Equine $equine):self
        {
            $this->equine = $equine;
            return $this;
        }
    }