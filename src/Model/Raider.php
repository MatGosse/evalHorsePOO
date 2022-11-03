<?php
    namespace App\Model;
    class Raider extends Human
    {
        public function __construct($name, $address)
        {
            parent::__construct($name,$address);
            $this->__toString();
        }
    }