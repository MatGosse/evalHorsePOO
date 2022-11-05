<?php
    namespace App\Model;
    
    class Manager extends Human
    {
        private Stable $stable;

        public function __construct(string $name, Address $address)
        {
            parent::__construct($name,$address);
        }

        // -------------------- other function

        /**
         * Set a Stable to the manager
         * @param Stable $stable
         * @return self
         */
        public function addStable(Stable $stable):self
        {
            $this->stable = $stable;
            return $this;
        }
    }