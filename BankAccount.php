<?php
    class BankAccount {
        public $owner;
        private $balance;

        public function __construct($name) {
            $this->owner = $name;
            $this->balance = 0; 
        }

        public function deposit($val) {
            if ($val <= 0) return;

            $this->balance += $val;
        }

        public function withdraw($val) {
            if ($val >= $this->balance) return;

            $this->balance -= $val;
        }

        public function printInfo() {
            echo $this->owner . " has a total amount balance of " . $this->balance . "$!<br>";
        }
    }
