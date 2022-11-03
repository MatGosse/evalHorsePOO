<?php
    namespace App\Model;
    
    class Manager extends Human
    {
        public function __construct(string $name, Address $address)
        {
            parent::__construct($name,$address);
        }
    }