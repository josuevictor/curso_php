<?php
    class Passenger{
        public $name;
        public $age;
        private $seatNumber;

        function __construct($name, $age, $seatNumber)
        {
            $this->name = $name;
            $this->age = $age;
            $this->seatNumber = $seatNumber;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getAge()
        {
            return $this->age;
        }

        public function getSeatNumber()
        {
            return $this->seatNumber;
        }

        public function setSeatNumber($seatNumber)
        {
            $this->seatNumber = $seatNumber;
        }
    }

    $passenger1 = new Passenger('victor', 24, 2);

    echo $passenger1->getName();